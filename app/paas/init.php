<?php
define('APP_NAME', 'paas');
define('APP_CONFIG', Yaconf::get(APP_NAME.'_'.YAF\ENVIRON));
define('APP_TABLE', Yaconf::get(APP_NAME.'_table'));
require __DIR__.'/../../vendor/autoload.php';