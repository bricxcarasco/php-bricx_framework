<?php
namespace App\Controllers;

use App\Database;

class Controller extends Database
{
    public static function view($path)
    {
        $real_path = str_replace('.', '/', $path);
        require $_SERVER['DOCUMENT_ROOT'] . "/views/{$real_path}.php";
    }

    protected static function redirect($path, $data = null)
    {
        $real_path = str_replace('.', '/', $path);
        require $_SERVER['DOCUMENT_ROOT'] . "/views/{$real_path}.php";
    }
}