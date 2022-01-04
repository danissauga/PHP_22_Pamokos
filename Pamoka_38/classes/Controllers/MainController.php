<?php

namespace Classes\Controllers;
use Classes\Crud\InitDb;

class MainController {
    private $router;
    private $db;

    public function __construct()
    {
        $this->db = new InitDb();
        $this->router = new \AltoRouter(); 
        $this->router->setBasePath('/php-pamokos/PHP_22_Pamokos/Pamoka_38');

        $this->router->map('GET', '/', function() {
        require __DIR__ . '/../../views/home.php';
        });
        $this->router->map('GET', '/add', function() {
        require __DIR__ . '/../../views/add.php';
        });
        $this->router->map('GET', '/list', function() {
        require __DIR__ . '/../../views/list.php';
        });

        $match = $this->router->match();

        // call closure or throw 404 status
        if( is_array($match) && is_callable( $match['target'] ) ) {
            call_user_func_array( $match['target'], $match['params'] );
        } else {
            // no route was matched
            header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        }
    }


} 