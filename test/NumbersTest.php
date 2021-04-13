<?php

use PHPunit\Framework\TestCase;

class NumbersTest extends TestCase
{
      public function testNumberReplace(){
         require_once "ListNumbers.php";
         $this->assertEquals('string',numberReplace(100));
      }

}