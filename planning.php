<html>

	<head>
		<title>planning</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css.css"/>
        </head>
<body class="bodyaccdeco">

<header>
		<ul class="menu">

						<li><a href="index.php">accueil</a></li>   
                        <li><a href="profil.php">modifier profil</a></li>   
                        <li><a  href="reservation-form.php">reservation</a></li>
						</header>



<?php



session_start();


if(isset($_POST['envoyer']))
{
	$_SESSION['id']=$_POST['test'];
	header("Location: reservation.php");
}

	$con=mysqli_connect("localhost","root","","reservationsalles");
	mysqli_set_charset($con, "utf8");
	$date="SELECT * FROM reservations";
	$query=mysqli_query($con, $date);
	$result=mysqli_fetch_all($query);


?>

<section class="tableaux">

<article class="planningtable">
<table class="BlueTable">
	<thead>
		<tr>
			<th>
			</th>
			<th>
				Lundi
			</th>
			<th>
				Mardi
			</th>
			<th>
				Mercredi
			</th>
			<th>
				Jeudi
			</th>
			<th>
				Vendredi
			</th>
			<th>
				Samedi
			</th>
			<th>
				Dimanche
			</th>
		</tr>
	</thead>
	<tbody>
		<?php
		
		for($ligne =8; $ligne <= 19; $ligne++ )
		{
			echo "<tr>";
			echo "<td>".$ligne."</td>";

			for($colonne = 1; $colonne <= 7; $colonne++)
			{
				echo "<td>";
				foreach($result as $value)
				{
				$jour=date("w", strtotime($value[3]));
				$h=date("H", strtotime($value[3]));
				if($h==$ligne && $jour== $colonne)
				{
					echo $value[1];
				?>
					<form method="post">	
						<input name="envoyer" type="submit" value="Détail">

						<input name="test" type="hidden" value="<?php echo $value[0]; ?>">
					</form>	
				<?php					
				}
			}
				echo "</td>";
			}
		}
		echo "</tr>";

?>
		
</table>


</article>

</section>

</body>

</html> 

