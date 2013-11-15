<?php
/*
 * Configuration part
 */
$login = "login";
$password = "password";
$blog = 'data.dat';
$template = 'template.php';

function outputTpl($file, $outdata)
{
	include $file;
}

$data = unserialize(file_get_contents($blog));

// Save yet another post
if(isset($_POST['text']) && isset($_POST['login']) && isset($_POST['password'])
	&& ($_POST['login'] == $login) && ($_POST['password'] == $password)) {
	$data[] = array(time(), $_POST['text']);
	file_put_contents($blog, serialize($data));
}

outputTpl($template, array_reverse($data));
?>
