<?php

/**
 * Used
 */
use App\Controllers\HomeController as Home;

/**
 * Проверить Composer
 */
if (! is_file(ROOT . '/vendor/autoload.php')) {
    die('Composer не найден');
}

/**
 * Подключить Composer
 */
require ROOT . '/vendor/autoload.php';

// Запустить HomeController
$home = new Home;

// Показать
var_dump($home->view('HomeController'));
