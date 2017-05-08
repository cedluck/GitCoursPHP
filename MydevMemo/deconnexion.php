<!DOCTYPE html>
<html>
<head>
	<title>deco</title>
</head>
<body>
<?php
session_start();
$_SESSION = array();
session_destroy();
header('location:index.php');
?>


</body>
</html>