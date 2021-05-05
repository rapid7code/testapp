<?php
echo $_REQUEST['hub_challenge'];

echo 'Get From POSTMAN: <br/>';
// Takes raw data from the request
$json = file_get_contents('php://input');

//Encode the array into a JSON string.
$encodedString = $json;//json_encode($array);

//Save the JSON string to a text file.
file_put_contents('newfile.txt', $encodedString);

$headers = apache_request_headers();
$heads = [];

$string = 'meatyhamhock';
$key = '9b3fde7da7c49db2bac93c73ea258868';
$signature = hash_hmac('sha1', $json , $key);
$heads['sha1'] = $signature;
// print_r($signature);


foreach ($headers as $header => $value) {
    $heads[$header] = $value;
    // if($header == 'X-Hub-Signature'){
    //     if($value == 'sha1=meatyhamhock'){
    //         continue;
    //     }
    // }
    // echo "$header: $value <br />\n";
}

file_put_contents('newfile.txt', json_encode($heads));

//Retrieve the data from our text file.
$fileContents = file_get_contents('newfile.txt');

//Convert the JSON string back into an array.
$decoded = json_decode($fileContents, true);
var_dump($decoded);

// $params = (array) json_decode(file_get_contents('php://input'), TRUE);
// print_r($params);
die;