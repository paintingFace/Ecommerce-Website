	<?php


Session_start();

?>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css " href="./css/style.css">
</head>
<body>
	
		<div class="header">

			<nav>
				<img src="./img/logo.jpg" alt= logo  > 
				<ul>
					<li><a class="active"href="index.php">HOME</a></li>
					<li><a href="aboutus.html">ABOUT US</a></li>
					<li><a href="contactus.html">CONTACT US</a></li>
					<?php if($_SESSION['name'] != ''){ ?>
						<li><a href="scripts/login.php">LOG OUT</a></li>
					<?php } else{ ?>
						<li><a href="scripts/signup.php">SIGN UP</a></li>
						<li><a href="scripts/login.php">LOG IN</a></li>
					<?php }?>

				</ul>
			</nav>

		</div>
		
		<div class="main-body">
			<img src="./img/banner2.jpg"  alt="banner " align="center">
		</div>
		<div class="side">
         <p> GET YOURS DRINKS WITHIN AN HOUR</p>
        <p> Anesthesia is quite remarkable.</p> <br><p>It's lost time. And you wake up kind of refreshed.</p><br><p> Get REFRESHED WITH OUR DRINKS  </p><br><br><br><br>	<br><br>	<br><br>	

		</div>
		<div class="products">
			<p> OUR PRODUCTS </p>
		</div>


		<div class="slide">
				<marquee   behavior="alternate" bgcolor="#ffffcc" onmouseover="this.stop()" onmouseout="this.start()">  	
					<img src ="./img/1.jpg" width="300" border="0">&nbsp&nbsp
					<img src ="./img/2.jpg" width="300" border="0">&nbsp&nbsp
					<img src ="./img/3.jpg" width="300" border="0">&nbsp&nbsp
					<img src ="./img/6.jpg" width="300" border="0"> &nbsp&nbsp	
					<img src ="./img/4.jpg" width="300" border="0">&nbsp&nbsp
					<img src ="./img/5.jpg" width="300" border="0">&nbsp&nbsp
					<img src ="./img/6.jpg" width="300" border="0">&nbsp&nbsp

				</marquee>
		</div>
		<br>

	<strong><h1><center>Products in detials with price tag</center></h1></strong>	
	<hr >
	<br>>


	<div class="cards">
 <div class="card">
  <img src="./img/1.jpg" alt="drink1" style="width:100%">
  <h1>Bakadi</h1>
  <p class="price">$19.99</p>
  <p>best Quality of product</p>
  <p><button>Add to Cart</button></p>
</div>

<div class="card">
  <img src="./img/5.jpg" alt="drink1" style="width:100%">
  <h1>Whiskey Sour</h1>
  <p class="price">$29.99</p>
  <p>best Quality of product</p>
  <p><button>Add to Cart</button></p>
</div>

<div class="card">
  <img src="./img/j3.jpg" alt="drink1" height="300px" width="300px" style="width:100%">
  <h1>Fruit</h1>
  <p class="price">$69.99</p>
  <p>best Quality of product</p>
  <p><button>Add to Cart</button></p>
</div>
<br><br>
	</div>

<div class="cards">
 <div class="card">
  <img src="./img/4.jpg" alt="drink1" style="width:100%">
  <h1>Manhattan</h1>
  <p class="price">$15.99</p>
  <p>best Quality of product</p>
  <p><button>Add to Cart</button></p>
</div>

<div class="card">
  <img src="./img/j1.jpg" alt="drink1"height="300px" width="300px" style="width:100%">
  <h1>Mango</h1>
  <p class="price">$145.99</p>
  <p>best Quality of product</p>
  <p><button>Add to Cart</button></p>
</div>

<div class="card">
  <img src="./img/3.jpg" alt="drink1" style="width:100%">
  <h1>Daiquiri</h1>
  <p class="price">$669.99</p>
  <p>best Quality of product</p>
  <p><button>Add to Cart</button></p>
</div>
		</div>	<div>
			<center>
				<br>
				<br>	
				<h1>Vision and Mission</h1>
				<hr>
				<br>
				<br>
				<div class="vision">
					<br>
					<p>
						Vision of the Drinks Website to deliver the best quality drinks and liquid beverages <br>
						and make customers happy and cherrful.<br><br>
						Our mission is to become popular to overall the world wide and become a big brand  <br>
						by maintaining the quality .<br><br>
						We are working hard to make authetic tasty yummy drinks and juices <br>
						our main mission is to provide customer service on time and make them happy<br><br>
						.<br><br>
						
					</p>
				</div>
			</center>
		</div>




		<div class="footer">

			<center>
				<h3><b>©Cheers 2019 All Rights Reserved.</b></h3>
			</center>
		</div>

		</div>



</body>
</html>