<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use Src\Estrategy;
use Src\Listado;
final class ListadoTest extends TestCase {
    private $obj;
    private $strategy;

    function setUp():void{
        $this->strategy =new Estrategy();
        $this->obj= new Listado($this->strategy);
        
    } 

    public function testFailure()
    {
        $this->obj->solution(5);
        $expected='Falabella';
        $this->assertArrayHasKey(
            $expected,  
            array_flip($this->obj->getResp())
        );
    }

    public function testWordContainInList()
    {
        $this->obj->solution(15);
         $expected='Falabella';
        $this->assertContains(
            $expected, 
            $this->obj->getResp()
        );
    }

    public function testNumberModThree():void{
        $expected='Falabella';
        $this->assertEquals( 
            $expected,
            $this->strategy->sustitution(3)
        );
        //print "Falabella";
    }

    public function testNumberModFive():void{
         $expected='It';
        $this->assertEquals( 
            $expected, 
            $this->strategy->sustitution(5)
        );
        //print "It";
    }
    public function testNumberModTreeAndFive():void{
        $expected='Integraciones';
        $this->assertEquals( 
            $expected,
            $this->strategy->sustitution(15)
        );
        //print "Integraciones";
    }

    public function testExpectSameList()
    {
        $this->obj->solution(5);
        $expected=[1=>1, 2=>2,  3=>"Falabella",4=>4, 5=>"It"];
        $this->assertSame(
            $expected,
            $this->obj->getResp()
        );
       
    }

}