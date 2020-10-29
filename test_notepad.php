<html>
<head>
<link href="notepad.css" rel="stylesheet">
</head>
<body>
<header>
<div container>
<h1>TESTER<h1>
</div>
</header>
<form action="" method="post">
<select name="ville">
<option value="paris">Paris</option>
<option value="londre">londre</option>
<option value="moscou">Moscou</option>
</select>
<input type="submit"></input>
</form>
<footer>
</footer>
</body>
</html>


<?php
if (empty($_POST)){
	echo "veuillez selectionnez une commande";
}
else{
	$villechoisie= $_POST['ville'] ;
	
	if ($villechoisie == 'paris') {
		echo "Paris est la capital de la france";
	}
	if ($villechoisie == 'londre') {
		echo "Londre est la capitale du Royaume Unis";
	}
	if ($villechoisie == 'moscou') {
		echo "Moscou est la capitale de la Fédération de Russie";
	}
}
	
?>