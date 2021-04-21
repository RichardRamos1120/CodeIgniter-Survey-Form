<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

<h1>The Current Time and Date</h1>

<?php

date_default_timezone_set("America/New_York");
echo "<h2>".date("M d, Y h:i:sa")."</h2>";
?>


</body>
</html>
