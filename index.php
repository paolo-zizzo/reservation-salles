<?php session_start(); ?>
<html>

	<head>
		<title>accueil</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css.css"/>
        </head>



<?php

if(isset($_POST['deco']))
        {
                unset($_SESSION['login']);
                unset($_SESSION['password']);
        }   

if(isset($_SESSION['login']))
{
           



?>

	<body class="bodyaccdeco">
                <header>

                <ul class="menu">


                <?php
                

                       
                        

                        
       
                       
                        
                                echo $_SESSION['message'];


                        ?>
                        <li><a href="profil.php">modifier profil</a></li>   
                        <li><a  href="reservation-form.php">reservation</a></li>
                        <li><a  href="planning.php">planning</a></li>


 
                        <form method="post" action="index.php">
                                <input class="bouton" type="submit" value="deconnexion" name="deco">   
                        </form></ul>

                        <?php
                          
                        ?>
	                </ul>
                        </header>
                        

         </section>

         <section class="accueildeco">
<p>
        reservez vos salles grâce a l'onglet "reservation" <br>


</p>
 



                <?php
}
else
{ 


        
        
        ?>
                <body class="bodyaccdeco">


<header>


        <ul class="menu">

        <li><a class="a1" href="connexion.php">connexion</a></li>
       <li><a class="a1" href="inscription.php">inscription</a></li>
       <li><a class="a1" href="reservation-form.php">reservation</a></li></ul></header>


        </header>
     


</main>

       <section class="accueildeco">
<p>
        Pour reserver pensez a vous connecter <br>


</p>

       







</body>

     <?php   
}

?>
                
                        
                                        </html>

