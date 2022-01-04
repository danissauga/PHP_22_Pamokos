<?php

namespace Controllers\Crud;

use Simplon\Mysql\Mysql;
use Simplon\Mysql\QueryBuilder\CreateQueryBuilder;
//use Simplon\Mysql\QueryBuilder\ReadQueryBuilder;

class InitDb {

    protected $_mysql;
    protected const HOST = "localhost";
    protected const USER = "admin";
    protected const PASS = "admin";
    protected const DBNAME = "blogas";

    public function __construct() {
 
        $this->connect();

    }

    private function connect() {

        // $host     = "localhost";//Ip of database, in this case my host machine
        // $user     = "admin";	//Username to use
        // $pass     = "admin";//Password for that user
        // $dbname   = "blogas";//Name of the database

        // $connection = new \PDO("mysql:host=localhost;dbname=blogas", 'root', '');
        // $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        $connection = new \PDO("mysql:host=".HOST."dbname=".DBNAME, USER, PASS);
        $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
  
        $this->_mysql = new Mysql($connection);

    }

    public function addData() {

        $store = new NameStore($this->_mysql);

        $model = $store->create(
            (new CreateQueryBuilder())->setModel(
                (new NameModel())
                    ->setName('Kunigunda')
                    ->setAge(22)
            )
        );

    }

}
