<?php
/**
 * Created by PhpStorm.
 * User: 13554
 * Date: 21.02.2018
 * Time: 12:48
 */
namespace app\lib\base;

interface DB
{
    public static function connect();

    public static function disconnect();
}