<?php

declare(strict_types=1);

header('Content-Type: application/json; charset=UTF-8');

function respond(int $statusCode, array $payload): void
{
    http_response_code($statusCode);
    echo json_encode($payload, JSON_UNESCAPED_SLASHES);
    exit;
}

function isValidGitHubUsername(string $username): bool
{
    return (bool) preg_match('/\A[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,37}[a-zA-Z0-9])?\z/', $username);
}

function fetchContributionMarkup(string $username, int $year): string
{
    $from = sprintf('%d-01-01', $year);
    $to = sprintf('%d-12-31', $year);
    $url = sprintf(
        'https://github.com/users/%s/contributions?from=%s&to=%s',
        rawurlencode($username),
        $from,
        $to
    );

    if (function_exists('curl_init')) {
        $curl = curl_init($url);
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_TIMEOUT => 15,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_HTTPHEADER => [
                'Accept: text/html,application/xhtml+xml',
                'User-Agent: Mozilla/5.0 Portfolio GitHub Contributions',
            ],
        ]);

        $response = curl_exec($curl);
        $statusCode = (int) curl_getinfo($curl, CURLINFO_RESPONSE_CODE);
        $error = curl_error($curl);

        if (is_string($response) && $statusCode >= 200 && $statusCode < 300) {
            return $response;
        }

        throw new RuntimeException($error !== '' ? $error : 'GitHub returned an unexpected response.');
    }

    $context = stream_context_create([
        'http' => [
            'method' => 'GET',
            'timeout' => 15,
            'header' => implode("\r\n", [
                'Accept: text/html,application/xhtml+xml',
                'User-Agent: Mozilla/5.0 Portfolio GitHub Contributions',
            ]),
        ],
    ]);

    $response = @file_get_contents($url, false, $context);
    if (is_string($response) && $response !== '') {
        return $response;
    }

    throw new RuntimeException('Unable to fetch GitHub contribution data.');
}

function extractTotalContributions(string $markup, int $year): int
{
    if (!preg_match('/<h2[^>]*id="js-contribution-activity-description"[^>]*>(.*?)<\/h2>/si', $markup, $match)) {
        return 0;
    }

    $text = trim(preg_replace('/\s+/', ' ', strip_tags($match[1])));
    if (!preg_match('/([\d,]+)\s+contributions\s+in\s+' . preg_quote((string) $year, '/') . '/i', $text, $totalMatch)) {
        return 0;
    }

    return (int) str_replace(',', '', $totalMatch[1]);
}

function extractContributionDays(string $markup): array
{
    $pattern = '/<td[^>]*data-date="([^"]+)"[^>]*data-level="(\d)"[^>]*><\/td>\s*<tool-tip[^>]*>([^<]*)<\/tool-tip>/si';
    preg_match_all($pattern, $markup, $matches, PREG_SET_ORDER);

    $days = [];

    foreach ($matches as $match) {
        $tooltip = html_entity_decode(trim($match[3]), ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $count = 0;

        if (preg_match('/([\d,]+)\s+contribution/i', $tooltip, $countMatch)) {
            $count = (int) str_replace(',', '', $countMatch[1]);
        }

        $days[] = [
            'date' => $match[1],
            'level' => (int) $match[2],
            'contributions' => $count,
        ];
    }

    usort($days, static function (array $left, array $right): int {
        return strcmp($left['date'], $right['date']);
    });

    return $days;
}

$username = isset($_GET['username']) ? trim((string) $_GET['username']) : '';
$year = filter_input(INPUT_GET, 'year', FILTER_VALIDATE_INT);
$currentYear = (int) date('Y');

if ($username === '' || !isValidGitHubUsername($username)) {
    respond(400, ['error' => 'Invalid GitHub username.']);
}

if ($year === false || $year < 2008 || $year > $currentYear) {
    respond(400, ['error' => 'Invalid year requested.']);
}

try {
    $markup = fetchContributionMarkup($username, $year);
    $days = extractContributionDays($markup);

    respond(200, [
        'username' => $username,
        'year' => $year,
        'totalContributions' => extractTotalContributions($markup, $year),
        'days' => $days,
    ]);
} catch (Throwable $exception) {
    respond(502, ['error' => 'Unable to load GitHub contribution data right now.']);
}
