<!--  Jacob Grossman - Participation January 7, 201
		Print even numbers
-->

<html>
<head>
	<title></title>
</head>
<body>

	<form action="lab.php" method="GET" default="Please enter a number">
		<input type="text" name="number">
		<input type="submit" value="submit">
	</form>
<?php 

	 if(isset($_REQUEST['number'])) {

	 	$n = $_REQUEST['number'];
	 	echo "N = ".$n."<br />";
	 	echo "Even Numbers:";
		for($i = 2; $i <= $n; $i +=2) {
			echo "".$i." ";
		}

		for()
	}
 ?>

</body>
</html>