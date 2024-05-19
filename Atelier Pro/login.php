<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        $login_valide="Nino";
        $pwd_valide="azerty123#";
        if(isset($_POST['login']) && isset($_POST['pwd'])){
            if($login_valide==$_POST['login'] && $pwd_valide==$_POST['pwd']){
                session_start();
                $_SESSION['login']=$_POST['login'];
                $_SESSION['pwd']=$_POST['pwd'];
                header('location: admin.php');
            }
            else{
                echo '<body onLoad="alert(\'Membre non reconu...\')">';
                echo '<meta http-equiv="refresh" content="0,URL="index.php">';
            }

        }
        else{
            echo 'les variables du formulaire ne sont pas déclarées';
        }
    ?>

</body>
</html>