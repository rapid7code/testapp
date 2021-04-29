<?php
echo $_REQUEST['hub_challenge'];

echo '<pre>';
print_r($_POST);

file_put_contents("newfile.txt", $_POST);