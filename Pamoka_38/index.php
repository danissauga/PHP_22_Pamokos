<?php

//spl_autoload_register(function() {
 //   require __DIR__ . '/Crud/NameStore.php';
 //   require __DIR__ . '/Crud/NameModel.php';
 //   require __DIR__ . '/Crud/ExampleClass.php';
//});

include (__DIR__ . '/vendor/autoload.php');

use Classes\Controllers\MainController;

new MainController();

// $router = new AltoRouter();
// $router->setBasePath('/php-pamokos/PHP_22_Pamokos/Pamoka_38');
// // map homepage

// $router->map('GET', '/', function() {
//         require __DIR__ . '/views/home.php';
//      // echo 'Homepage';
// });
// $router->map('GET', '/list', function() {
//         require __DIR__ . '/views/list.php';
//      // echo 'Homepage';
// });


// // match current request url
// $match = $router->match();

// // call closure or throw 404 status
// if( is_array($match) && is_callable( $match['target'] ) ) {
// 	call_user_func_array( $match['target'], $match['params'] );
// } else {
// 	// no route was matched
// 	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
// }

/*// dynamic named route
$router->map('GET|POST', '/users/[i:id]/', function($id) {
    $user = .....
    require __DIR__ . '/views/user/details.php';
}, 'user-details');*/

// echo URL to user-details page for ID 5
//echo $router->generate('user-details', ['id' => 5]); // Output: "/users/5"




// use Simplon\Mysql\Mysql;

// use Simplon\Mysql\QueryBuilder\ReadQueryBuilder;
// //use Simplon\Mysql\QueryBuilder\UpdateQueryBuilder;

// use Classes\Crud\NameStore;
// //use Classes\Crud\NameModel;
// use Classes\Crud\ExampleClass;

// $host     = "localhost";//Ip of database, in this case my host machine
// $user     = "admin";	//Username to use
// $pass     = "admin";//Password for that user
// $dbname   = "blogas";//Name of the database

//         $connection = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
//         $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// $dbConn = new Mysql($connection);
// $store = new NameStore($dbConn);
// $duom = new ExampleClass();

// //Prideti irasa

//  $from_input = [
//     'name' => 'Peter',
//     'age'  => 46,
// ];

// $duom->AddRecord($dbConn, $from_input);

// //Duomenu atnaujinimas

//     $conds = ['id' =>5,];

//     $from_input = [
//             'name' => 'Gabi',
//             'age'  => 50,
//     ];

// $duom->UpdateRecord($dbConn,$conds,$from_input);

// //duomenu panaikinimas

// $duom->DeleteRecord($dbConn,3);

// //Visu duomenu panaikinimas

// //$duom->DeleteAllRecords($dbConn);

// //Custom duomenu panaikinimas

// $from_input = [
//     'id'   => 5,
//     'name' => 'John',
// ];

// //$duom->DeleteCustomRecord($dbConn, $from_input);


// //Duomenu paemimas
// $model = $store->read( new ReadQueryBuilder() );
// $duom->ViewRecord($model);
// echo '<br />';











