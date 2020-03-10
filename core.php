<?php

function karmarkarKarpAlg(array $input): int
{
    $heap = new SplMaxHeap();


    foreach ($input as $item) {
        $heap->insert($item);
    }

    while ($heap->count()>1) {
        $first = $heap->extract();
        $second = $heap->extract();
        $dif = $first-$second;
        $heap->insert($dif);
    }

    return ($heap->extract());
}
