<?php
/**
 * Created by PhpStorm.
 * User: 13554
 * Date: 21.02.2018
 * Time: 15:22
 */
namespace app\lib;

class classOne
{
    public static $x;
    public static $y;

    public function __construct($x,$y)
     {
        echo 'the summation of x and y is '.($x+$y).PHP_EOL;

         // $this->x = $x;
		 self::$x = $x;
         self::$y = $y;
     }

     public static function multi()
     {
		$m = self::$x - self::$y;
         // echo 'Subtraction :'.$m;
         // echo 'this is collection class';
         return $m;
     }
}