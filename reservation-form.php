<html>

	<head>
		<title>reserver</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css.css"/>
        </head>
<body class="bodyaccdeco">

<header>
		<ul class="menu">

						<li><a href="index.php">accueil</a></li>   
                        <li><a href="profil.php">modifier profil</a></li>   
                        <li><a  href="planning.php">planning</a></li></ul>
						</header>









<?php
session_start();

if(!isset($_SESSION['login']))
{
    header('Location: connexion.php');
}
$login=$_SESSION['login'];
$con=mysqli_connect("localhost","root","","reservationsalles");
$query="SELECT id FROM utilisateurs WHERE login ='$login'";
$result=mysqli_query($con, $query);
$resultat=mysqli_fetch_array($result);

?>


<section class="resa">
<form   action="reservation-form.php" method="post">   
    <input type="text" name="titre"  required placeholder="titre"/>
    <input type="text" name="description"required placeholder="description"/>
    <input type="datetime-local" required name="debut"/>
    <input type="datetime-local" required name="fin"/>
    <input type="submit" name="bouton" value="ajouter"/>
</form>
</section>
<?php


if(isset($_POST['bouton']))
{
$titre=$_POST['titre'];
$description=$_POST['description'];
$debut=$_POST['debut'];
$fin=$_POST['fin'];
$req="INSERT INTO reservations VALUES (NULL, '".$titre."','".$description."','".$debut."','".$fin."','".$resultat['id']."')";
mysqli_query($con, $req);
mysqli_close($con);
header('Location: planning.php');

}

?>

</body>

</html>