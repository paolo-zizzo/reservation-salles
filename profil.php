<html>
<link rel="stylesheet" href="css.css"/>

<body class="bodyaccdeco">
    
    <?php
session_start();
?>



<h2>modifiez votre profil</h2>

<div class="form-style-8">
<form class="formulaire" name="profil" method="post" action="profil.php">
Entrez votre login: <input type="text" name="login" value="<?php echo $_SESSION ['login'];?>">

        
        
        
        Entrez votre mot de passe: <input type="password" name="password" value="<?php echo $_SESSION['password'];?>">
    
      
        confirmez votre mot de passe : <input type="password" name="password1"value="<?php
        echo $_SESSION['password'];?>"><br/>
        
        <input type="submit" name="valider" value="OK"/>
</form></div> 
<?php

if(isset($_POST['valider']))
{
    

 $db=mysqli_connect("localhost","root","","reservationsalles");
 $newlogin= $_POST['login']; 
 $login= $_SESSION['login']; 
 $password= $hash=password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);

 $req= "UPDATE utilisateurs SET login = '".$newlogin."', password = '".$password."' WHERE login= '".$login."' ";
 $query= mysqli_query ($db, $req);
 $_SESSION['login']=$newlogin;
 $_SESSION['password']=$password;
 header('location: index.php');
}
?>