<?php declare(strict_types=1);

namespace Src;

class Estrategy implements IEstrategy{
    public function sustitution($number){
        $words =  ['10' => 'Falabella', 
        '01' => 'It', 
        '11' => 'Integraciones'];

        $idx=(int) (($number % 3)==0).(int)(($number%5)==0);
        if ($idx>0)
            return $words[$idx];
        return $number;
    }
}