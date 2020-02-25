<html>
<link rel="stylesheet" href="css.css"/>
<body class="bodyaccdeco">




<header>
		<ul class="menu">

						<li><a href="index.php">accueil</a></li>   
                        <li><a href="inscription.php">inscription</a></li>   
                        
						</header>





    
    
<h2>connexion:</h2>    
<div class="form-style-8">

<form class="formulaire" name="connexion" method="post" action="connexion.php">
Entrez votre pseudo : <input type="text" required  name="login"/> <br/>
        Entrez votre mot de passe : <input type="password" required name="password"/><br/>

        <input type="submit" name="valider" value="OK"/>
    </form></div>

    <?php

if(isset ($_POST['valider']))
{
    

    session_start();
    $db=mysqli_connect("localhost","root","","reservationsalles");
    $login=$_POST['login']; 
    $pass=$_POST['password'];
    $requete1="SELECT password  FROM `utilisateurs`WHERE login='$login'";
    $query= mysqli_query ($db,$requete1);
    $resultat=mysqli_fetch_array($query);

    
    
    if (password_verify($_POST['password'],$resultat['password'])){
    $_SESSION['message']= "bienvenue";
    $_SESSION['login']=$login;
    $_SESSION['password']=$_POST['password'];
    header('location: index.php');
    }
    else
    {
        echo "mot de passe ou login incorrect" ;
        echo '<br>';
    }

}




