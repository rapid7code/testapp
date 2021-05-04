<?php
echo $_REQUEST['hub_challenge'];

echo 'Get From POSTMAN: <br/>';
// Takes raw data from the request
$json = file_get_contents('php://input');

//Encode the array into a JSON string.
$encodedString = $json;//json_encode($array);

//Save the JSON string to a text file.
file_put_contents('newfile.txt', $encodedString);

//Retrieve the data from our text file.
$fileContents = file_get_contents('newfile.txt');

//Convert the JSON string back into an array.
$decoded = json_decode($fileContents, true);
var_dump($decoded);

// $params = (array) json_decode(file_get_contents('php://input'), TRUE);
// print_r($params);
die;






























echo $_REQUEST['hub_challenge'];
$txt = '';
// echo '<pre>';
// print_r($_POST);
$arg = [];
$arg['request'] = $_REQUEST;
echo '<pre>';
print_r($_POST);
die;
// file_put_contents("newfile.txt", $_POST);

// $json = '{
//             "field": "leadgen",
//             "value": {
//             "ad_id": "444444444",
//             "form_id": "444444444444",
//             "leadgen_id": "444444444444",
//             "created_time": 1620094783,
//             "page_id": "444444444444",
//             "adgroup_id": "44444444444"
//             }
//         }';

// echo '<pre>';
// $json = json_decode($json);
// foreach($json as $item){
//     print_r($item);
//     $txt .= implode($item);    
// }

// print_r($arg);
// print_r($txt);die;

/*
{
  "field": "leadgen",
  "value": {
    "ad_id": "444444444",
    "form_id": "444444444444",
    "leadgen_id": "444444444444",
    "created_time": 1620094783,
    "page_id": "444444444444",
    "adgroup_id": "44444444444"
  }
}
*/

// echo '<pre>';
// print_r($arg);
// echo '<br/>';
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
foreach($arg as $item){
    $txt .= implode($item);    
}
fwrite($myfile, $txt);
// print_r($txt);
// die;    


$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);



$txt = '';
// echo '<pre>';
// print_r($_POST);
$arg = [];
$arg['request'] = $_REQUEST;
$arg['post'] = $_POST;
// file_put_contents("newfile.txt", $_POST);

// $json = '{
//             "field": "leadgen",
//             "value": {
//             "ad_id": "444444444",
//             "form_id": "444444444444",
//             "leadgen_id": "444444444444",
//             "created_time": 1620094783,
//             "page_id": "444444444444",
//             "adgroup_id": "44444444444"
//             }
//         }';
// echo '<pre>';
// $json = json_decode($json);
// foreach($json as $item){
//     print_r($item);
//     $txt .= implode($item);    
// }

// print_r($arg);
// print_r($txt);die;

/*
{
  "field": "leadgen",
  "value": {
    "ad_id": "444444444",
    "form_id": "444444444444",
    "leadgen_id": "444444444444",
    "created_time": 1620094783,
    "page_id": "444444444444",
    "adgroup_id": "44444444444"
  }
}
*/

// echo '<pre>';
// print_r($arg);
// echo '<br/>';


$json = file_get_contents('php://input');
// Converts it into a PHP object
$data = json_decode($json);

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
foreach($arg as $item){
    $txt .= implode($item);
}
fwrite($myfile, $txt);
// print_r($txt);
// die;    


$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);