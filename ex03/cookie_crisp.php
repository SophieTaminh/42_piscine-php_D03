<?php
$action = $_GET['action'];
$name = $_GET['name'];
$value = $_GET['value'];

if ($action == "set")
{	
	setcookie($name,$value);
}

if ($action == "get")
{
	if($_COOKIE[$name] !== NULL)
	{
		echo($_COOKIE[$name]);	
		echo "\n";
	}	
}
if ($action == "del")
{
	setcookie($name, 'content', 1);
}

?>