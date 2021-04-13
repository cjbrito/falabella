<?php

use PHPunit\Framework\TestCase;

class NumbersTest extends TestCase
{
   private $obj;

   public function setUp():void{
      require_once "Solution.php";
      $this->obj= new Solution();
   }

   public function testNumberWordReplace(){
      $this->obj->getList(100);
      $this->assertEquals('string', $this->obj->getStringList());
      $this->assertEmpty("",$this->obj->getStringList());
      $this->assertTrue(true, $this->obj->getWordsInList());

      $this->obj->getList(18);
      $this->assertTrue(true, $this->obj->getWordsInList());

      $this->obj->getList(35);
      $this->assertTrue(true, $this->obj->getWordsInList());

      $this->obj->getList(57);
      $this->assertTrue(true, $this->obj->getWordsInList());

   }

   public function testNumberReplaceFail(){
      $this->obj->getList(14);
      $this->assertTrue(false, $this->obj->getWordsInList());
      $this->obj->getList(0);
      $this->assertEmpty("",$this->obj->getStringList());
      
   }

}
