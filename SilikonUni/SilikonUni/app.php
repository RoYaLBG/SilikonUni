<?php
require_once 'config.php';
defined('APPLICATION_PATH') || define('APPLICATION_PATH', $config[getenv('CONFIG')]['root']);

require_once APPLICATION_PATH . 'core/View.php';

$view = new View();

?>