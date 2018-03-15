<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/15 0015
 * Time: 11:09
 */
namespace Hello\Tests\Say;

use PHPUnit\Framework\TestCase;
use Hello\SayGoodBy;

class SayGoodByTest extends TestCase
{
    public function testSayGoodByTest()
    {
        $SayGoodBy = new SayGoodBy();
        $this->assertEquals('《三体》',$SayGoodBy->say('《test》') );
    }
}