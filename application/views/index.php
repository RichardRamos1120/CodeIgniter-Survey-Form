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

<form action="/ci/surveys/process_form" method="post">
	<input type="text" name="name" placeholder="your name">
	<select name="location">
		<option value="loc1">loc1</option>
		<option value="loc2">loc2</option>
		<option value="loc3">loc3</option>
		<option value="loc4">loc4</option>
	</select>
	<select name="favorite_language">
		<option value="lang1">lang1</option>
		<option value="lang2">lang2</option>
		<option value="lang3">lang3</option>
		<option value="lang4">lang4</option>
	</select>
	<textarea name="comment" cols="30" rows="10"></textarea>
	<input type="submit">

</form>
</body>
</html>
