<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
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

        $requete = $conn->prepare("SELECT * FROM avis LIMIT 10");
                $requete->execute();
                $resultats = $requete->fetchAll();
                echo "<br>Voici les 10 derniers avis :<br>";
                foreach ($resultats as $row)
                echo
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

    ?> 
</body>
</html>