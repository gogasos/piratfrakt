<?php
$root_folder = './files';
if (file_exists($root_folder))
{
	$folder = scandir($root_folder);
	foreach($folder as $file) {
		if ($file == '..' || $file == '.')
			continue;
		$file = basename($file); // basic sanitisation
		echo $file;
		if (is_file($root_folder.'/'.$file))
		{
			echo('<a href="'.$root_folder.'/'.$file.'">Download</a>').'<br />';
		}
	}
}
?>