<?php

function karmarkarKarpAlg(array $input){
    sort($input);
    $heap = new SplMaxHeap();


    foreach ($input as $item){
        $heap->insert($item);

    }

    while ($heap->count()>1){
        $first = $heap->extract();
        $second = $heap->extract();
        $dif = $first-$second;
        $heap->insert($dif);
    }

    return ($heap->extract());
}


const TEST_FAIL = "Test Faild \n";
const TEST_OK = "Test OK \n";
$test_0 = karmarkarKarpAlg([12,10,9,7,4,3,2]) == 1 ? TEST_OK: TEST_FAIL;
$test_1 = karmarkarKarpAlg([1, 6, 11, 5]) == 1 ? TEST_OK: TEST_FAIL;
echo($test_0);
echo($test_1);