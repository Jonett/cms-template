<?php
require_once "vendor/autoload.php";
// Kickstart the framework
$f3 = require 'lib/base.php';

$f3->set('DEBUG', 1);
if ((float)PCRE_VERSION < 8.0) {
    trigger_error('PCRE version is out of date');
}

// Load configuration
$f3->config('config.ini');
$f3->config('app/config.ini');
$f3->config('app/routes.ini');
$f3->config('app/public.ini');

if ($f3->VERSION == 'DEV') {
    $f3->set('DEV', ["session" => $f3->get('SESSION'), "get" => $f3->get('GET'), "post" => $f3->get('POST')]);
}

if ($f3->get('SESSION.login_state') == NULL) {
    $f3->set('SESSION.login_state', FALSE);
    $f3->set('SESSION.user_data', NULL);
}

if (!in_array($f3->get('PATH'), $f3->public_routes) && !$f3->get('SESSION.login_state')) {
    $f3->reroute('/');
}

$f3->run();
