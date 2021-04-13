<?php

function getList($array_dim) {
    $word = [
        '10' => 'Falabella', 
        '01' => 'IT', 
        '11' => 'Integraciones'
    ];
    $list = [];
    for ($i = 1; $i <= $array_dim; $i++) {
        $list[$i] = $i;
        if ($i % 3 == 0 || $i % 5 == 0) {
            $w1 = ($i % 3 == 0) & 1;
            $w2 = ($i % 5 == 0) & 1;
            //echo $i, ' => ', $w1, ', ', $w2, ', ', $w3, ' =============> ', $word[$w1 . $w2 . $w3], '<br>';
            $list[$i] = $word[$w1 . $w2 ];
        }
    }
    return implode($list,",");
}

//echo getList(100);
