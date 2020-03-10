<?php
require "vendor/autoload.php";
require "validation.php";
require "core.php";
//  cli app
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
// Create a PSR-7 request object to send

use Aws\Lambda\LambdaClient;

if(count($argv)>1){

    $value = validate($argv);
}
$client = new Client([

    // You can set any number of default request options.
    'timeout'  => 3.0,
]);


$endPoint = "https://example.com";

$queryParams = [
    'value' => [
        5,8,13,27,14
    ]
];

$options = [
    'debug' => true, // so you can see what the request looks like
    'query' => $queryParams
];
$endPoint = 'https://dup2t5azki.execute-api.us-west-1.amazonaws.com/default/karmarkarKarpCloud';
$res = $client->request('POST', $endPoint,
   ["form_params" =>
       ['body' =>[
       5,
       8,
       13,
       27,
       14
       ]
       ]
   ]);


$body = $res->getBody();
var_dump($body->getContents());


///$r = $client->request('GET', 'https://dup2t5azki.execute-api.us-west-1.amazonaws.com/default/karmarkarKarpCloud?value='.($arr).'');

