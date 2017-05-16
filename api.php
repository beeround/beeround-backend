<?php
/**
 * Created by PhpStorm.
 * User: karstenschutz
 * Date: 16.05.17
 * Time: 13:12
 */

include './vendor/autoload.php';

// DB Connection
$api = new PHP_CRUD_API(array(
    'dbengine'=>'MySQL',
    'hostname'=>'127.0.0.1',
    'username'=>'dev',
    'password'=>'dev',
    'database'=>'beeround',
    'charset'=>'utf8'
));
$api->executeCommand();