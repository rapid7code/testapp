<?php
echo $_REQUEST['hub_challenge'];
$txt = '';
// echo '<pre>';
// print_r($_POST);
$arg = [];
$arg['request'] = $_REQUEST;
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