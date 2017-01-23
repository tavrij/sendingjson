<?php

$json_input_data=json_decode(file_get_contents('php://input'),TRUE);

//print_r( $json_input_data);
$fp = fopen('data.txt', 'w');
fwrite($fp, $json_input_data);
fclose($fp);


?>