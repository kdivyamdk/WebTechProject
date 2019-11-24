<?php
	extract($_GET);
	$chunk=376;
	$pos=$count*$chunk;
	$file=fopen("pic.txt","r");
	fseek($file,$pos);
	$data=fread($file,$chunk);
	echo $data;
?>