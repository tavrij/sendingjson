<?php
// get contents of a file into a string
$filename = "data.txt";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);

if($contents){
	echo $contents;
	
}else{
	echo "error";
}
?>