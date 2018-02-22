<?php
/**
 * Created by PhpStorm.
 * User: 13554
 * Date: 22.02.2018
 * Time: 16:35
 */

include_once 'app/include/init.php';

use app\lib\classOne;

$obj = new classOne(1,4);

$s = classOne::multi();

echo '<br>'.$s;


use app\lib\collection;

$obj1 = new collection();

 $s1 = $obj1->collectionBee();
 
 echo '<br>'.$s1;
 
  $s2 = collection::xyz();
  
  echo $s2;
  
  use app\lib\mysqli;
  mysqli::connect();
  
  
    $db = Database::getInstance();
    $mysqli = $db->getConnection(); 
    $sql_query = "SELECT foo FROM .....";
    $result = $mysqli->query($sql_query);