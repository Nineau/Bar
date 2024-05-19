
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/f ont-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="style.css">
        <title>Formulaire_évaluation_bar</title>
    </head>
    <body>
        <h1><center> Formulaire de notation du bar </center></h1>
        <?php include('nav.php'); ?>
        <center><form method="post">
            <div class="container">
                <div class="col-12">
                    <br>
                    <br>
                     <center><h2>Donnez nous vôtre avis sur le bar:</h2></center>
                </div>
                <br>

                <div class="col-12">
                    <p>Propreté du bar</p>
                    <input type="radio" id="1" name="question1" value="1">
                    <label for="1">Mauvaise</label>
                    <input type="radio" id="2" name="question1" value="2">
                    <label for="2">Correcte</label>
                    <input type="radio" id="louie" name="question1" value="3">
                    <label for="3">Parfaite</label>
                </div>

                <br>

                <div class="col-12">
                    <p>qualité du service</p>
                    <input type="radio" id="1" name="question2" value="1">
                    <label for="1">Mauvais</label>
                    <input type="radio" id="2" name="question2" value="2">
                    <label for="2">Correct</label>
                    <input type="radio" id="louie" name="question2" value="3">
                    <label for="3">Très bien</label>
                </div>

                <br>

                <div class="col-12">
                    <p>qualité de la cuisine</p>
                    <input type="radio" id="1" name="question3" value="1">
                    <label for="1">Mauvaise</label>
                    <input type="radio" id="2" name="question3" value="2">
                    <label for="2">Correcte</label>
                    <input type="radio" id="louie" name="question3" value="3">
                    <label for="3">Excelente</label>
                </div>
                
                <br>

                <div class="col-12">
                    <p>Vôtre soirée c'est elle bien passé</p>
                    <input type="radio" id="1" name="question4" value="1">
                    <label for="1">non</label>
                    <input type="radio" id="2" name="question4" value="2">
                    <label for="2">Pas trop</label>
                    <input type="radio" id="louie" name="question4" value="3">
                    <label for="3">oui</label>
                </div>

                <br>
                <br>

                <textarea name="question5"placeholder="Votre avis nous intéresse !"></textarea>
									<br>
									<div class="rating rating2"><!--
										--><a href="#5" title="Give 5 stars">★</a><!--
										--><a href="#4" title="Give 4 stars">★</a><!--
										--><a href="#3" title="Give 3 stars">★</a><!--
										--><a href="#2" title="Give 2 stars">★</a><!--
										--><a href="#1" title="Give 1 star">★</a>
									</div>
                
                <div class="col-12">
                    <input type="submit">
                </div>
                <br>
                <?php
                    if(isset($_POST['question1']) && isset($_POST['question2']) && isset($_POST['question3']) && isset($_POST['question4']) && isset($_POST['question5'])){
                        $question1 = $_POST['question1'];
                        $question2 = $_POST['question2'];
                        $question3 = $_POST['question3'];
                        $question4 = $_POST['question4'];
                        $question5 = $_POST['question5'];

                        $moyenne = ($question1 + $question2 + $question3 + $question4) / 4;
                        $moyenne = round($moyenne, 2);
                        
                        echo $moyenne . "/3";
                    }
                ?>
                <br>
                <br>
                <?php

                $servername = 'localhost';
                        $username = 'root';
                        $password = '';
                    
                        try{
                            $conn = new PDO("mysql:host=$servername;dbname=galactica", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        }
                        catch(PDOException $e){
                        echo "Erreur : " . $e->getMessage();
                        }

                if(isset($_POST['question1']) && isset($_POST['question2']) && isset($_POST['question3']) && isset($_POST['question4']) && isset($_POST['question5'])){
                $question1 = $_POST['question1'];
                $question2 = $_POST['question2'];
                $question3 = $_POST['question3'];
                $question4 = $_POST['question4'];
                $question5 = $_POST['question5'];

                $moyenne = ($question1 + $question2 + $question3 + $question4) / 4;

                echo '<div class="alert alert-success">Note globale : ' . $moyenne . '/3';


                        $requete = $conn->prepare("INSERT INTO avis (Proprete_bar, Qualite_cuisine, Qualite_service, Qualite_soiree, Commentaire)
                        VALUES (:pb, :qc, :qs, :qso, :cm)");
                        $requete->bindParam(':pb', $question1);
                        $requete->bindParam(':qc', $question2);
                        $requete->bindParam(':qs', $question3);
                        $requete->bindParam(':qso', $question4);
                        $requete->bindParam(':cm', $question5);
                        $requete->execute();
                }

                $requete = $conn->prepare("SELECT * FROM avis LIMIT 10");
                $requete->execute();
                $resultats = $requete->fetchAll();
                echo "<br>Voici les 10 derniers avis :<br>";
                foreach ($resultats as $row){
                echo $row["Proprete_bar"];
                echo "/3 | ";
                echo $row["Qualite_cuisine"];
                echo "/3 | ";
                echo $row["Qualite_service"];
                echo "/3 | ";
                echo $row["Qualite_soiree"];
                echo "/3 | ";
                echo $row["Commentaire"];
                echo "<br>";

                }

                $requete2 = $conn->prepare("SELECT COUNT(*) FROM avis");
                $requete2->execute();
                $resultats2 = $requete2->fetch();
                echo "<br>Nombre total de notes : " . $resultats2[0];
                echo "<br>";
                $requete3 = $conn->prepare("SELECT (AVG(Proprete_bar) + AVG(Qualite_service) + AVG(Qualite_cuisine) + AVG(Qualite_soiree)) / 4 FROM avis");
                $requete3->execute();
                $resultats3 = $requete3->fetch();
                echo "<br>Moyenne des avis : " . round($resultats3[0], 2) . "/3";

                ?>
                </div>
                </form></center>
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