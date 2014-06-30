<?php
require_once 'config.php';
defined('APPLICATION_PATH') || define('APPLICATION_PATH', $config[getenv('CONFIG')]['root']);
defined('APPLICATION_HOST') || define('APPLICATION_HOST', $config[getenv('CONFIG')]['host']);

require_once APPLICATION_PATH . 'core/View.php';

$view = new View();

?>