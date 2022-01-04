<?php

namespace Classes\Crud;

use Simplon\Mysql\Mysql;
use Simplon\Mysql\QueryBuilder\CreateQueryBuilder;
use Simplon\Mysql\QueryBuilder\ReadQueryBuilder;

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

        $connection = new \PDO("mysql:host=localhost;dbname=".self::DBNAME, self::USER, self::PASS);
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
   public function viewData() {
       $store = new NameStore($this->_mysql);
       $models = $store->read(
            (new ReadQueryBuilder())->addCondition('name', 'Kunigunda')
);

     echo $models[0]->getId(); // prints user id from first matched model
   }

}
