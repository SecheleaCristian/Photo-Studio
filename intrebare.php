<?php 
	$servername="localhost";
	$username="root";
	$password="student";
	$dbname="contact";

	$con=new mysqli($servername,$username,$password,$dbname);
	if($con->connect_error){
		die("Connection failed".$con->connect_error);
	}

	$nume= $_POST["nume"];
	$prenume=$_POST["prenume"];
	$mail=$_POST["mail"];
	$intrebare=$_POST["intrebare"];

	$stmt=$con->prepare("INSERT INTO intrebari (nume,prenume,mail,intrebare) VALUES (?,?,?,?)");
	$stmt->bind_param("ssss" ,$nume,$prenume,$mail,$intrebare);
	$stmt->execute();

	mysqli_stmt_close($stmt);
	mysqli_close($con);
	header('Location:contact.php');

 ?>