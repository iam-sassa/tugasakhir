<?php

namespace OOP\App\Core;

class View
{
    // public static function render(string $view, $data)
    // {
    //     require __DIR__ . '/../View/template/header.php';
    //     require __DIR__ . '/../View/' .$view . '.php';
    //     require __DIR__ . '/../View/template/footer.php';
    // }

    public static function user(string $view, $data)
    {
        require __DIR__ . '/../View/user/' .$view . '.php';
    }

    public static function page(string $view)
    {
        require __DIR__ . '/../View/' .$view . '.php';
       
    }

    public static function index(string $view, $data)
    {
        require __DIR__ . '/../View/' .$view . '.php';
       
    }

    public static function admin(string $view, $data)
    {
        require __DIR__ . '/../View/admin/template/header.php';
        require __DIR__ . '/../View/admin/template/sidebar.php';
        require __DIR__ . '/../View/admin/' .$view . '.php';
        require __DIR__ . '/../View/admin/template/footer.php';
    }

    public static function client(string $view, $data)
    {
        require __DIR__ . '/../View/admin/master/template/header.php';
        require __DIR__ . '/../View/admin/master/template/sidebar.php';
        require __DIR__ . '/../View/admin/master/' .$view . '.php';
        require __DIR__ . '/../View/admin/master/template/footer.php';
    }

    public static function input(string $view)
    {
        require __DIR__ . '/../View/admin/master/' .$view . '.php';
    }

    public static function edit(string $view, $data)
    {
        require __DIR__ . '/../View/admin/master/' .$view . '.php';
    }
}