<?php

require __DIR__ . '/vendor/autoload.php';

$host     = "localhost";//Ip of database, in this case my host machine
$user     = "admin";	//Username to use
$pass     = "admin";//Password for that user
$dbname   = "blogas";//Name of the database

try {
        $connection = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e)
{
    echo $e->getMessage();
}

//phpinfo();




/*$pdo = new PDOConnector(
	'localhost', // server
	'',      // user
	'',      // password
	'blogas'   // database
);

$pdoConn = $pdo->connect('utf8', []); // charset, options

//
// you could now interact with PDO for instance setting attributes etc:
// $pdoConn->setAttribute($attribute, $value);
//     */

$dbConn = new Simplon\Mysql\Mysql($connection);