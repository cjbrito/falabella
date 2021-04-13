<?php

function getList() {
    $word = [
        '101' => 'Falabella', 
        '011' => 'IT', 
        '111' => 'Integraciones'
    ];
    $list = [];
    for ($i = 1; $i <= 100; $i++) {
        $list[$i] = $i;
        if ($i % 3 == 0 || $i % 5 == 0) {
            $w1 = ($i % 3 == 0) & 1;
            $w2 = ($i % 5 == 0) & 1;
            $w3 = ($i % 3 == 0 || $i % 5 == 0) & 1;
            //echo $i, ' => ', $w1, ', ', $w2, ', ', $w3, ' =============> ', $word[$w1 . $w2 . $w3], '<br>';
            $list[$i] = $word[$w1 . $w2 . $w3];
        }
    }
    return implode($list,",");
}

echo getList();
