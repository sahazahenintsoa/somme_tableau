<!-- 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form>
	<span>Valeur table1</span>
	<input type="number" name="n1" placeholder ="valeur n°:1 table1" required>
	<input type="number" name="n2" placeholder = "valeur n°:2 table1" required>
	<input type="number" name="n3" placeholder = "valeur n°:3 table1" required>
	<br>
	<br>
	<span>valeur table 2</span>
	<input type="number" name="n4" placeholder ="valeur n°1 table2" required>
	<input type="number" name="n5" placeholder= "valeur n°2 table2" required>
	<input type="number" name="n6" placeholder ="valeur n°3 table2" required>
	<br>
	<input type="submit" name="btn" value = "resultat">
</form>
</body>
</html> -->


<?php 
// $n1 = $_POST["n1"];
// $n2 = $_POST["n2"];
// $n3 = $_POST["n3"];
// $n4 = $_POST["n4"];
// $n5 = $_POST["n5"];
// $n6 = $_POST["n6"];

$table1 = [ 8, 7 , 6];
$table2 = [6 , 17  ,11];
for ($i=0; $i  < max(sizeof($table1),sizeof($table2)) ; $i++) { 
	$total = $table1[$i] + $table2[$i];
	echo  ' ' . $total . ' ';
}


 ?>