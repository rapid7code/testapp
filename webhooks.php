<?php
echo $_REQUEST['hub_challenge'];

// echo '<pre>';
// print_r($_POST);
$arg = [];
$arg['request'] = $_REQUEST;
// file_put_contents("newfile.txt", $_POST);

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
$txt = implode($arg());
fwrite($myfile, $txt);
fclose($myfile);