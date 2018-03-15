<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="./css/style1.css">
    <title>Photo studio</title>
    <header>
      <div class="container">
        <div id="brand">
          <h2><a href="PhotoStudio.html"><img src="./img/logo02.png" width="200" height="105" ></a>     Creating memories </h2>
        </div>
        <nav>
          <ul>
            <li><a href="PhotoStudio.html">Home</a></li>
            <li><a href="galerie.php">Galerie</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="despre.html">Despre noi</a></li>
          </ul>
        </nav>
      </div>
		
    </header>
    	
  <section id="galerie_u">  
    <div class="container">

		<div class="row">
	      	<div class="col-lg-12">
	           <form class="well" action="upload.php" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="file"></label>
				    <input type="file" name="file">
				  </div>
				  <input type="submit" class="btn btn-lg btn-primary" value="Upload">
				</form>
			</div>
	    </div>
    	<div class="gallery_u">
	       <?php 
	       	//scan "uploads" folder and display them accordingly
	       $folder = "uploads";
	       $results = scandir('uploads');
	       foreach ($results as $result) {
	       	if ($result === '.' or $result === '..') continue;
	       
	       	if (is_file($folder . '/' . $result)) {
	       		echo '
	       		<div class="col-md-3">
		       		<div class="thumbnail">
			       		<img src="'.$folder . '/' . $result.'" alt="...">
				       		<div class="caption">
				       		<p><a href="remove.php?name='.$result.'" class="btn btn-danger btn-xs" role="button">Remove</a></p>
			       		</div>
		       		</div>
	       		</div>';
	       	}
	       }
	       ?>
    	</div>
    </div> <!-- /container -->
</section>
	<div>
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
	</div>
  </body>
</html>