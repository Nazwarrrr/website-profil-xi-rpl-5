<?php

// Paksa semua driver default Laravel ke nilai fallback aman
putenv('APP_ENV=production');
putenv('LOG_CHANNEL=errorlog');
putenv('CACHE_STORE=array');
putenv('SESSION_DRIVER=cookie');
putenv('QUEUE_CONNECTION=sync');

$_ENV['APP_ENV'] = 'production';
$_ENV['LOG_CHANNEL'] = 'errorlog';
$_ENV['CACHE_STORE'] = 'array';
$_ENV['SESSION_DRIVER'] = 'cookie';
$_ENV['QUEUE_CONNECTION'] = 'sync';

$_SERVER['APP_ENV'] = 'production';
$_SERVER['LOG_CHANNEL'] = 'errorlog';
$_SERVER['CACHE_STORE'] = 'array';
$_SERVER['SESSION_DRIVER'] = 'cookie';
$_SERVER['QUEUE_CONNECTION'] = 'sync';

// Set path penyimpanan sementara Vercel
$_ENV['APP_CONFIG_CACHE'] = '/tmp/config.php';
$_ENV['APP_EVENTS_CACHE'] = '/tmp/events.php';
$_ENV['APP_PACKAGES_CACHE'] = '/tmp/packages.php';
$_ENV['APP_ROUTES_CACHE'] = '/tmp/routes.php';
$_ENV['APP_SERVICES_CACHE'] = '/tmp/services.php';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp';

require __DIR__ . '/../public/index.php';
