


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

<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>
<script language="JavaScript" src="js/overlib.js"></script>
<script language="javascript" src="js/overlib_anchor.js"></script>
<script language="javascript" src="js/overlib_crossframe.js"></script>
<script language="javascript" src="js/overlib_cssstyle.js"></script>
<script language="javascript" src="js/overlib_exclusive.js"></script>
<script language="javascript" src="js/overlib_followscroll.js"></script>
<script language="javascript" src="js/overlib_hideform.js"></script>
<script language="javascript" src="js/overlib_shadow.js"></script>
<script language="javascript" src="js/overlib_centerpopup.js"></script>

<a href="javascript:void(0);" onmouseover="return overlib('jag prövar. prövipröv.');" onmouseout="return nd();" onfocus="this.blur()" title="">TestTest. =P</a>





	</body>
</html>