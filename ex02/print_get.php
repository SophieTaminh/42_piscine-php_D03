<?php
$param = $_GET;
foreach ($param as $key => $value) 
{
	echo "$key".": "."$value"."\n";
}
?>