<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
	<title>Photo Studio</title>
  <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
  <script src="jquery.fancybox.min.js"></script>
  <link href="jquery.fancybox.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
<header>
      <div class="container">
        <div id="brand">
          <h2><a href="PhotoStudio.html"><img src="./img/logo02.png" width="200" height="105" ></a>     Creating memories </h2>
        </div>
        <nav>
          <ul>
            <li><a href="PhotoStudio.html">Home</a></li>
            <li class="actual"><a href="galerie.php">Galerie</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="despre.html">Despre noi</a></li>
            <li><a href="login.php"><img src="./img/login.png" width="20" height="20"></a></li>
          </ul>
        </nav>
      </div>
    </header>
    <section id="galerie">
    
      <div class="gallery">
  
         <?php
$folder_path = 'uploads/'; //image's folder path

$num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

$folder = opendir($folder_path);
 
if($num_files > 0)
{
 while(false !== ($file = readdir($folder))) 
 {
  $file_path = $folder_path.$file;
  $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
  if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') 
  {
   ?>
   <a href="<?php echo $file_path; ?>" data-fancybox="images" >
  <img src="<?php echo $file_path; ?>"  height="250" />
</a>
            
            <?php
  }
 }
}
else
{
 echo "the folder was empty !";
}
closedir($folder);
?>

</div>
    </section>
   

    <footer>
      <p>Photo Studio, Copyright &copy; 2018</p>
    </footer>




</body>
</html>