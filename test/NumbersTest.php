<?php

use PHPunit\Framework\TestCase;

class NumbersTest extends TestCase
{

   public function testNumberReplace(){
      require_once "Solucion.php";
      $this->assertEquals('string',getList(75));
      $this->assertEquals('string',getList(18));
      $this->assertEquals('string',getList(35));
      $this->assertEquals('string',getList(57));
      $this->assertEmpty("",getList(0));
      $this->assertTrue(0<strlen(getList(100)));
      
   }

    public function testNumberReplaceFail(){
      require_once "Solucion.php";
      $this->assertEmpty("",getList(100));
      $this->assertTrue(0==strlen(getList(100)));
      
   }

}
