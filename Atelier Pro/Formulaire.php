<!DOCTYPE html>
<html lang="fr">
        <head>
			<title>Quizz_du_bar</title>
		     <meta charset="utf-8">	 
			 <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
			 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
			 <link rel="stylesheet" href="style.css">
			 <script language="javascript">

						var score=0; /* Varriable pour le score*/

						function quiz()/* Fonction pour le quizz */ {
							var rep=prompt('Quel est le nom du bar ?');
							if (rep=='Galactica'|| rep=='Galactica'){
								score=score+1;
								alert('Bravo ! votre score est de :'  + score);
							} else {
								alert('FAUX !');
							}
						}

					
						function thm(objet) /* Fontion pour le thème du bar */ {
						
							if (objet.value=="Bar sans lumièrre"){
								score=score + 1;
								alert('Bravo ! votre score est de :' + score);
							} else {
								alert('FAUX !');
							}
						}

						QUIZ:
						function ajouter(objet) /* Fonction pour remettre une phrase dans le bon ordre */ {
							document.getElementById("te").value += objet.value;
							document.getElementById("te").value+=' ';
							objet.disabled=true;
							if(document.getElementById('te').value=="Mon ordinateur est en panne ") {
								document.getElementById('te').value="Mon ordinateur est en panne."
								score= score + 1;
								alert('Bravo ! votre score est de :' + score);
							}
						}
						QUIZ:
						function raz() /* Fonction pour recommencer */ {
							document.getElementById("te").value="";
							document.getElementById("btn11").disabled=false;
							document.getElementById("btn22").disabled=false;
							document.getElementById("btn33").disabled=false;
							document.getElementById("btn44").disabled=false;
							document.getElementById("btn55").disabled=false;
						}

					
		</script>
	    </head>
		
			<h1><center> Quizz du bar ! </center></h1>
			<br>
			<nav>
				<ul>
                      
                <option value<?php include ("nav.php"); ?> 
				</ul>
			</nav>
			<br>
			<form>
				<fieldset>
			<br>
				<h2> Quizz du bar :</h2>
				<br>
				<br>
					<div class="container">
					<label for="pseudo">Entrez votre pseudonyme :</label>
					<input type>
					<br>
					<br>
					<input type="radio"> Homme
					<input type="radio"> Femme
					<br>
					<br>
					Age <input type="number" min=0 max=99> 
					<p> Question n°1: Quand a été crée le bar ?</p>
					<input type="radio"> Le 24/11/2019
					<input type="radio"> Le 26/09/2022
					<input type="radio"> Le 15/09/2022
					<br>
					<br>
					<p> Question n°2 : Combien y a t'il de zones éclairées au sein du bar ?</p>
					<input type="checkbox"> 1
					<input type="checkbox"> 5
					<input type="checkbox"> 3
					<p> Question n°3: De quelle couleur est le fond du logo ?</p>
					<input type="radio"> Gris
					<input type="radio"> Jaune
					<input type="radio"> Blanc
					<br>
					<br>
					<p> Question n°4: Quelle est le slogan du bar</p>
					 <label for="Slg">Slogan : </label>
							<select id="slg">
								<optgroup label="Slogan">
									<option value"slg"> Just do it</option>
									<option value"slg"> A fond la forme</option>
									<option value"slg"> Parce que nous le valons bien</option>
									<option value"slg"> L'amour est aveugle</option>
									<option value"slg"> c'est beau la vie, pour les grands et les petits</option>
									<option value"slg"> I'm Lovin' It</option>
									<option value"slg"> What Else</option>  
                                    <option value>
					</select>
									<br>
									<br>
								<p>Question n°5: Est-ce que les chaises sont peintes dans le bar</p> 
									<input type="checkbox"> Oui
									<input type="checkbox"> Non
									<br>
									<br>
								<p>Remettre dans le bon ordre</p>
            						<input type="button" id="btn11" onclick="ajouter(this)" value="en">
            						<input type="button" id="btn22" onclick="ajouter(this)" value="est">
            						<input type="button" id="btn33" onclick="ajouter(this)" value="panne">
            						<input type="button" id="btn44" onclick="ajouter(this)" value="ordinateur">
           							 <input type="button" id="btn55" onclick="ajouter(this)" value="Mon">
									 <br>
            						<input type="text" id="te" size="60" readonly="true" style="background-color:white; font-weight:bold; border:white none 0px; text-align: center; color: #006600;">
            						<br>
           						 	<br>
            						<input type="button" value="Recommencer" onclick="raz()">
									<br>
           						 	<br>
								<p>Comment s'appelle le Bar ?</p>
            						<input type="button" value="Nom Bar" onclick="quiz()">
									<br>
									<br>
								<p>Quel est le thème du bar ?</p>
									<input type="button" value="le bar" id="btn1" onclick="thm(this)">
									<input type="button" value="Caffé pop" id="btn2" onclick="thm(this)">
									<input type="button" value="Bar avec lumièrre" id=btn3 onclick="thm(this)">
									<input type="button" value="Bar sans lumièrre" id="btn4" onclick="thm(this)">
									<br>
									<div class="col-4">
									</div>
									<br>
									<input type="submit" value="Vérifier vos résultats">
									<br>
									<br>
									<p>Lien vers <a href="http://localhost/HTML/Atelier%20pro/formu%20de%20notation.php">le formulaire de notation </a></p>
									
									
									<br>
									</div>
								</fieldset>
							</form>
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
</html>