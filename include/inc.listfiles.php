<?php
$search_string = '';
for ($i=0;$i<strlen($_POST['find']);$i++)
{
	$search_string .= '['.strtolower($_POST['find'][$i]).strtoupper($_POST['find'][$i]).']';
}

$toFind = '*'.htmlspecialchars($search_string).'*';
$dir = "./files";
$search_results = 0;

$table_data = '';
foreach (glob($dir.'/'.$toFind) AS $found)
{
	$search_results++;
	$table_data .= '<tr><td><a href="'.$found.'">'.basename($found).' </a></td></tr>';
}
if ($search_results > 0)
{
?>
<table id="file_list">
	<thead>
		<th>Filename - results: <?php echo $search_results; ?></th>
	</thead>
	<tbody>
	
	
	<?php
	echo $table_data;
	?>
	</tbody>
</table>
<?php
}
?>