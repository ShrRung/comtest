<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/14 0014
 * Time: 23:02
 */
namespace Hello;

class SayHello
{
    public static function say($words = "Hello World!")
    {
        echo 'say '.$words;
    }
}