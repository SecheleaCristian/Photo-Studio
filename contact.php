<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
	<title>Photo Studio</title>
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
            <li><a href="galerie.php">Galerie</a></li>
            <li class="actual"><a href="contact.php">Contact</a></li>
            <li><a href="despre.html">Despre noi</a></li>
            <li><a href="login.php"><img src="./img/login.png" width="20" height="20"></a></li>
          </ul>
        </nav>
      </div>
    </header>
    <section id="contact">
    <div id="social">
      <ul>
        <li><a href="https://www.facebook.com"><img src="./img/facebook1.png" width="50" height="50"></a></li>
        <li><a href="https://www.twitter.com"><img src="./img/twitter.png" width="60" height="60"></a></li>
        <li><a href="https://www.instagram.com"><img src="./img/instagram2.png" width="50" height="50"></a></li>
      </ul>
    </div>

    <div id="intrebare">
      <h3>Ai o intrebare? Scrie-ne!</h3>
    <form action="intrebare.php" method="POST">
      <label>Nume: </label>
      <input type="text" style="width:250px;" name="nume" required>
      <label>Prenume: </label>
      <input type="text" style="width:250px;" name="prenume" required>
      <label>E-mail: </label>
      <input type="e-mail" style="width:250px;" name="mail" required>
      <br>
      <label>Intrebare: </label>
      <textarea style="height:150px; width:250px;" name="intrebare" required></textarea>
      <button type="submit" id="btn">Trimite</button>
    </form> 
    </div>
    <div id="map">
      <h3 style="text-align: center;">Ne gasiti aici!</h3>
    
    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10934.139896314084!2d23.57463508844376!3d46.75435062431621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1c5120d28d0728ab!2sFasttrackIT!5e0!3m2!1sen!2sro!4v1520173223098" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></p>
   </div>
 </section>
    <footer>
      <p>Photo Studio, Copyright &copy; 2018</p>
    </footer>




</body>
</html>