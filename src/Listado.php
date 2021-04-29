<?php declare(strict_types=1);
namespace Src;
use Src\IEstrategy;

final class Listado {
    private $res=[];
    private $obj;

    function __construct(IEstrategy $func ){
        $this->obj=$func;
    }    
    
    public function solution($max=100){
        for($i=1;$i<=$max;$i++){
            $this->res[$i]=$this->obj->sustitution($i);
        }
    }

    public function getResp(){
        return $this->res;
    }
}