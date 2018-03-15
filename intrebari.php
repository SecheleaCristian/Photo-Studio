<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="./css/style1.css">
</head>
<body>
<h1>Intrebari</h1>
 <table>
 <tr>
 	<th>Nume</th>
 	<th>Prenume</th>
 	<th>E-mail</th>
 	<th>Intrebare</th>
</tr>
<?php  
	$servername="localhost";
	$username="root";
	$password="student";
	$dbname="contact";

	$con=new mysqli($servername,$username,$password,$dbname);
	if($con->connect_error){
		die("Connection failed".$con->connect_error);
	}
	$query=mysqli_query($con,"select * from intrebari");
	while ($row=mysqli_fetch_array($query)) {
		echo "<tr>";
		echo "<td>".$row["nume"]."</td>";
		echo "<td>".$row["prenume"]."</td>";
		echo "<td>".$row["mail"]."</td>";
		echo "<td>".$row["intrebare"]."</td>";
		echo "</tr>";
	}

?>


 </table>

</body>
</html>