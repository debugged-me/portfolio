<?php

function getRecaptchaConfig()
{
    static $config = null;

    if (is_array($config)) {
        return $config;
    }

    $localConfig = [];
    $localConfigPath = __DIR__ . '/recaptcha-config.local.php';

    if (file_exists($localConfigPath)) {
        $loaded = require $localConfigPath;
        if (is_array($loaded)) {
            $localConfig = $loaded;
        }
    }

    $envSiteKey = getenv('RECAPTCHA_SITE_KEY');
    $envSecretKey = getenv('RECAPTCHA_SECRET_KEY');
    $envAction = getenv('RECAPTCHA_ACTION');
    $envMinimumScore = getenv('RECAPTCHA_MINIMUM_SCORE');

    $config = [
        'site_key' => trim((string) ($localConfig['site_key'] ?? ($envSiteKey !== false ? $envSiteKey : '6Lfd3fEsAAAAAAcmCU2lOlM1wl4yEFfthzNaRVFK'))),
        'secret_key' => trim((string) ($localConfig['secret_key'] ?? ($envSecretKey !== false ? $envSecretKey : ''))),
        'action' => trim((string) ($localConfig['action'] ?? ($envAction !== false ? $envAction : 'contact_form'))),
        'minimum_score' => (float) ($localConfig['minimum_score'] ?? ($envMinimumScore !== false ? $envMinimumScore : 0.5)),
    ];

    return $config;
}
