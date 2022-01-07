<?php

namespace Classes\Controllers;
//use Classes\Crud\InitDb;

class MainController {
    private $router;
    private $db;

    public function __construct()
    {
        $this->router = new \AltoRouter();
        //$this->router->setBasePath($this->urlaub);
       $this->router->setBasePath('/php-pamokos/PHP_22_Pamokos/parduotuve');

            $this->router->map('GET', '/', function() {
            require __DIR__ . '/../../views/home.php';
            });
             $this->router->map('GET', '/index.php', function() {
            require __DIR__ . '/../../views/home.php';
            });
            $this->router->map('GET', '/list', function() {
            require __DIR__ . '/../../views/home.php';
            });
            $this->router->map('GET', '/add', function() {
            require __DIR__ . '/../../views/addGoods.php';
            });
            $this->router->map('GET', '/edit', function() {
            require __DIR__ . '/../../views/editGoods.php';
            });
            $this->router->map('GET|POST', '/login', function() {
            require __DIR__ . '/../../views/login.php';
            });
             $this->router->map('GET', '/logout', function() {
            require __DIR__ . '/../../views/login.php';
            });
            $this->router->map('GET', '/cart', function() {
            require __DIR__ . '/../../views/cart.php';
            });

        $match = $this->router->match();

        // call closure or throw 404 status
        if( is_array($match) && is_callable( $match['target'] ) ) {
            call_user_func_array( $match['target'], $match['params'] );
        } else {
            // no route was matched
            require __DIR__ . '/../../views/error404.php';
        }
        echo '<pre>';
       // print_r($match);
     // echo ($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    }


} 