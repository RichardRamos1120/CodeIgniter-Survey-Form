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


<?php

$plus1 = $this->session->userdata('visited');
$plus1++;
$this->session->set_userdata('visited',$plus1);

echo "<h2> You've visted this site " . $this->session->userdata('visited') . " Times </h2>";

echo "<h1>Submitted Information</h1>";

foreach ($this->session->all_userdata() as $key => $value){
	if ($key !== "__ci_last_regenerate" && $key !== "visited"){
		echo "<h2>". $key . " : " .$value."</h2>";
	}

}

?>

<a href="/ci/surveys/">Go Back</a>

</body>
</html>
