<?php
include "core.php";

const TEST_FAIL = "Test Faild";
const TEST_OK = "Test OK ";
$testDate = [
    ["data_set" => [12,10,9,7,4,3,2], "true_result"=>1],
    [ "data_set" => [1, 6, 11, 5], "true_result"=>1],
    [ "data_set" => [5,8,13,27,14], "true_result"=>3],
    ];



foreach ($testDate as $oneKeys){
    $result = [];
    $mbValue = karmarkarKarpAlg($oneKeys["data_set"]);
    $res = $mbValue == $oneKeys["true_result"] ? TEST_OK: TEST_FAIL;
    $result = [
        "result" => $res,
        "data_set"=> $oneKeys["data_set"],
        "my_answer" =>$mbValue,
        "true_result" =>$oneKeys["true_result"]
        ];
    echo(json_encode($result));
    echo("\n");
}
//karmarkarKarpAlg($dataSet_1) == 1 ? TEST_OK: TEST_FAIL;



