<?php

/// тут чуть SOLID нарушели )))
function validate($input): array{

    $countValueKey = ["--count", "-count"];
    $ValueKey = ["--value", "-value", "--values", "-values"];
    // срезаю index.php
    array_shift($input);
    $countKey = array_shift($input);

    if(!in_array($countKey, $countValueKey)){
        throw new Exception("--count не указан");
    }


    $count = (int)array_shift($input);
    if($count > 20 || $count<1){
        throw new Exception("от 1 до 20 самородков");
    }


    $valueKey = array_shift($input);

    if(!in_array($valueKey, $ValueKey)){
        throw new Exception("--value не указан");
    }


    $value = [];
    foreach ($input as $arg){
        // todo тут еще валидацию сделать
        $toInsert = (int)$arg;
        if($toInsert> 2000){
            throw new Exception("Слишком большой камушек {$toInsert}");
        }
        $value[]  = (int)$arg;
    }

    if(count($value) !==$count ){
        throw new Exception("Число камней не совподает с вводом");

    }
    return $value;
}