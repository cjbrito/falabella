<?php

class Solution {

    private $words = [
            '10' => 'Falabella', 
            '01' => 'IT', 
            '11' => 'Integraciones'
        ];
    private $content=[];
    private $dim_array=100;

    public function __construct(){
        $this->getList($this->dim_array);
    }

    public function getList($array_dim) {
        $list = [];
        for ($i = 1; $i <= $array_dim; $i++) {
            $list[$i] = $i;
            if ($i % 3 == 0 || $i % 5 == 0) {
                $w1 = ($i % 3 == 0) & 1;
                $w2 = ($i % 5 == 0) & 1;
                $list[$i] = $this->words[$w1 . $w2 ];
            }
        }
        $this->content= $list;
    }

    function getStringList(){
        return implode($this->content,",");
    }

    function getWordsInList(){
       $flag=false;
       foreach($this->words as $word){
         $flag  =in_array($word ,$this->content);
       }
      return $flag;
    }

}
