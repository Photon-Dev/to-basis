<?php

namespace App\Controllers;

/**
 * HomeController
 */
class HomeController //extends Controller
{
    /**
     * Конструктор
     */
    public function __construct()
    {
        // code...
    }

    public function view($value = 'view')
    {
        return $value . ' - работает';
    }
}
