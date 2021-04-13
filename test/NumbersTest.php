<?php

use PHPunit\Framework\TestCase;

class NumbersTest extends TestCase
{
      public function testNumberReplace(){
         require_once "Solucion.php";
         $this->assertEquals('string',getList(100));
      }

}
