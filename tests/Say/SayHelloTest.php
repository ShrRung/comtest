<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/15 0015
 * Time: 11:09
 */
namespace Hello\Tests\Say;

use PHPUnit\Framework\TestCase;
use Hello\SayHello;

class SayHelloTest extends TestCase
{
    public function testSayHelloTest()
    {
        $sayHello = new SayHello();
        $this->assertEquals('《三体》',$sayHello->say('《三体》') );
    }
}