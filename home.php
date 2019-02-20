<?php
session_start();
date_default_timezone_set('America/New_York');
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Cidl Home Page">
	  <meta name="keywords" content="cidl">
  	<meta name="author" content="Jason">
    <title>CIDL | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
	<link rel="shortcut icon" type= "image/jpg" href="img/icon.jpg">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
            
          <h1><span class="highlight">CIDL</span> Webpage</h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="home.php">Home</a></li>
            <li><a href="events.html">Events</a></li>
            <li><a href="pictures.html">Photos</a></li>
			<li><a href="links.html">Links</a></li>
			<li><a href="booklets.html">Booklets</a></li>
			<li><a href="locations.html">Location</a></li>
			<li><a href="questions.html">Questions</a></li>
            <li> <a class="float-right" href="logout.php">Logout</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="showcase">
      <div class="container">
        <h1>Welcome, <span class="highlight"><?php echo $_SESSION['username'] ?></span></h1>
        <p>The Date is: <?php echo date("m/d/Y"); ?></p>
          <p>The Current Time (EST) is <?php echo date('h:i A');?></p>
      </div>
    </section>

    <section id="newsletter">
      <div class="container">
        <h1>Stay tuned on upcoming Events!</h1>
        <form>
          <input type="email" placeholder="Enter Email...">
          <button type="submit" class="button_1">Join</button>
        </form>
      </div>
    </section>

    <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="./img/aboutus.png">
          <h3>About Us</h3>
          <p>Test.</p>
        </div>
        <div class="box">
          <img src="./img/events.png">
          <h3>Events</h3>
          <p>Test.</p>
        </div>
        <div class="box">
          <img src="./img/pictures.png">
          <h3>Join us on Discord!</h3>
          <a href="https://discord.gg/b2NHBA"> Invite Link </a>
        </div>
      </div>
    </section>
    <footer>
      <p>CIDL Webpage, made by Jason.</p>
    </footer>
  </body>
</html>
