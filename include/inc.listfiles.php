<?php
$search_string = '';
for ($i=0;$i<strlen($_POST['find']);$i++)
{
	$search_string .= '['.strtolower($_POST['find'][$i]).strtoupper($_POST['find'][$i]).']';
}

$toFind = '*'.htmlspecialchars($search_string).'*';
$dir = "./files";
foreach (glob($dir.'/'.$toFind) AS $found)
{
    echo $found; // Throw your links in here.
}

$scandir = scandir($dir);
?>