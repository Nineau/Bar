<!DOCTYPE html>
<html>
	<head>
		<title> Bar_Galactica</title>
		<meta charset="utf-8">
		<meta name="description" content="bar a lumiere">
		<meta name="robots" content="index,translate,follow">	
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
		<link rel="stylesheet" href="style.css">
		<script language="javascript">

			function deplace(dx,dy) /* Fonction pour déplacé un cube, avec des coordonnées précises a trouvé pour gagné*/{
			var x = parseInt(document.getElementById('claque').style.top)+ dy;
			var y = parseInt(document.getElementById('claque').style.left)+ dx;
			document.getElementById('claque').style.top= x+'px';
			document.getElementById('claque').style.left= y+'px';
			if (document.getElementById("claque").style.left == "450px" && document.getElementById("claque").style.top == "775px"){
        		alert('Félicitations !');
   			}

			}


			
	</script>
	</head> 
	<body>
		<form action="login.php" method="post">
			Votre login : <input type="text" name="login">
			<br>
			Votre mot de passe :<input type="password" name="pwd">
			<br>
			<input type="submit" value="Connexion"
		<div class="row">
		<center>
		<h1><center>Bar <span>G</span>alactica</center></h1>
		<center><img src="logobarPetit.png" id="logo" alt="Logo"></center>
		<br>
		<nav>
				<ul>
                    <?php include ("nav.php"); ?> 
				</ul>
			</nav>
			<section class="machine-contenue">
			<div class ="container-machine">
				<img src="offre-stage.jpg" alt="img stage">
			</div>
		</section>
			<br>
			<br>
			<div class="container">
				<h3>Horraires :</h3>
				<ul class="list-group">Horraires :
					<li class="list-group-item"> Lundi 19h-1h </li>
					<li class="list-group-item"> Mardi 19h-1h </li>	
					<li class="list-group-item"> mercredi 19h-1h </li>
					<li class="list-group-item"> Jeudi 19h-1h </li>
					<li class="list-group-item"> Vendredi 19h-1h </li>
					<li class="list-group-item"> Samedi 19h-3h </li>
					<li class="list-group-item"> Dimanche 19h-3h </li>
				</ul>
				</div>
				</div>
				</div>
				<br>
				<br>
		</center>
				<div style="text-align:center">
					<input type="button" value="&uArr;" onClick="deplace(0,-5)">
				</div>
				<div style="text-align:center">
				<input type="button" value="&lArr;" onClick="deplace(-5,0)">
				<input type="button" value="&dArr;" onClick="deplace(0,5)">
				<input type="button" value="&rArr;" onClick="deplace(5,0)">
				<div id="claque" style="position:absolute; height:20px; width:20px;background-color:#b5e7a0;left:445px;top:775px">&nbsp;
				</div>
				<br>
				<br>		
		<center>		
				<h2><center> Localisation du bar </center></h2>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d65405.495250850065!2d1.449457085078741!3d43.574429331037905!2m3
				!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1675237316896!5m2!1sfr!2sfr"width="600" height="450" style="border:0;"
				allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>		
		</center>
				<br>
				<br>
				<footer class="footer">
				<div class="container">
					<div class="row">
						<div class="footer-col">
							<h4>company</h4>
							<ul>
								<li><a href="#">about us</a></li>
								<li><a href="#">our services</a></li>
								<li><a href="#">privacy policy</a></li>
								<li><a href="#">affiliate program</a></li>
							</ul>
						</div>
						<div class="footer-col">
							<h4>get help</h4>
							<ul>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">shipping</a></li>
								<li><a href="#">returns</a></li>
								<li><a href="#">order status</a></li>
								<li><a href="#">payment options</a></li>
							</ul>
						</div>
						<div class="footer-col">
							<h4>online shop</h4>
							<ul>
								<li><a href="#">watch</a></li>
								<li><a href="#">bag</a></li>
								<li><a href="#">shoes</a></li>
								<li><a href="#">dress</a></li>
							</ul>
						</div>
						<div class="footer-col">
							<h4>follow us</h4>
							<div class="social-links">
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
								<a href="#"><i class="fab fa-linkedin-in"></i></a>
							</div>
						</div>
					</div>
				</div>
			</footer>
			
	</body>
</html>



	