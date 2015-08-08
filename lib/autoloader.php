<?php

$plugin_root = dirname(dirname(__FILE__));
if (file_exists("{$plugin_root}/vendor/autoload.php")) {
	// check if composer dependencies are distributed with the plugin
	require_once "{$plugin_root}/vendor/autoload.php";
}

require_once __DIR__ . '/functions.php';

if (\hypeJunction\Integration::isElggVersionBelow('1.9.0')) {
	require_once __DIR__ . '/forward_compat.php';
}