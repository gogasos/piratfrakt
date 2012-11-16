


<html>
	<head>
		<meta http-equiv="Content-Type" content="html/text; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="search.css" />
		<title>Piratfrakt</title>
	</head>
	<body>
	
<form class="form-wrapper" action=""" method="post">
        <input type="text" name="find" id="search" placeholder="Sök efter filer..." required>
        <input type="submit" value="go" id="submit">
</form>

<?php 
if (isset($_POST['find']))
{
	require_once('./include/inc.listfiles.php');
}
?>




	</body>
</html>