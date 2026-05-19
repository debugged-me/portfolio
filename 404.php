<?php

http_response_code(404);

$site = [
    'short_name' => 'CLARkODER',
];

$scriptName = isset($_SERVER['SCRIPT_NAME']) ? str_replace('\\', '/', $_SERVER['SCRIPT_NAME']) : '/404.php';
$basePath = rtrim(str_replace('/404.php', '', $scriptName), '/');
$homeUrl = ($basePath === '' ? '' : $basePath) . '/';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 | <?php echo htmlspecialchars($site['short_name'], ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="Custom 404 page for <?php echo htmlspecialchars($site['short_name'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="theme-color" content="#202020">
    <link rel="icon" type="image/svg+xml" href="<?php echo htmlspecialchars($basePath, ENT_QUOTES, 'UTF-8'); ?>/assets/favicon.svg">
    <link rel="shortcut icon" href="<?php echo htmlspecialchars($basePath, ENT_QUOTES, 'UTF-8'); ?>/assets/favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto+Flex:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo htmlspecialchars($basePath, ENT_QUOTES, 'UTF-8'); ?>/assets/css/style.css">
</head>

<body class="error-page">
    <div class="page-shell error-shell">
        <div class="ambient-orb ambient-orb--one"></div>
        <div class="ambient-orb ambient-orb--two"></div>
        <div class="ambient-orb ambient-orb--three"></div>

        <header class="site-header error-header">
            <a class="brand" href="<?php echo htmlspecialchars($homeUrl, ENT_QUOTES, 'UTF-8'); ?>">
                <?php echo htmlspecialchars($site['short_name'], ENT_QUOTES, 'UTF-8'); ?>
            </a>
        </header>

        <main class="error-main">
            <section class="container error-hero">
                <div class="error-grid">
                    <div class="error-copy">
                        <p class="error-kicker">Error 404</p>
                        <p class="error-code">404</p>
                        <h1 class="error-title">Page not found.</h1>
                        <p class="error-description">
                            The URL you entered does not match any page in this portfolio. It may have been removed, renamed, or typed incorrectly.
                        </p>
                    </div>

                    <aside class="error-mascot-stage" aria-hidden="true">
                        <div class="error-mascot">
                            <div class="error-mascot-antenna"></div>
                            <div class="error-mascot-head">
                                <span class="error-mascot-eye"></span>
                                <span class="error-mascot-eye"></span>
                                <span class="error-mascot-mouth"></span>
                            </div>
                            <div class="error-mascot-body">
                                <span class="error-mascot-core"></span>
                            </div>
                            <div class="error-mascot-arm error-mascot-arm--left"></div>
                            <div class="error-mascot-arm error-mascot-arm--right"></div>
                            <div class="error-mascot-leg error-mascot-leg--left"></div>
                            <div class="error-mascot-leg error-mascot-leg--right"></div>
                        </div>
                        <div class="error-mascot-shadow"></div>
                    </aside>
                </div>
            </section>
        </main>
    </div>
</body>

</html>
