<!DOCTYPE html>

<html>

	<head>

		<title>Les Caribous Vengeurs</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap">

	</head>

	<body>

	<div class="header">		
		<h1>
			<center>Les Caribous Vengeurs</center>
		</h1>
	</div>

	<div class="bg"></div>

	<br><br><br><br>

<!--
		<button type = "button" id="bouton"><a href="https://www.je-code.com/esgi1/hberleur/annuaire/index.php"><b>Accueil</b></a></button>

		<button type = "button" id="bouton"><a href="https://www.je-code.com/esgi1/hberleur/annuaire/contact.php"><b>Contact</b></a></button>

		<button type = "button" id="bouton"><a href="https://www.je-code.com/esgi1/hberleur/annuaire/admin/admin.php"><b>Administration</b></a></button>
-->

		<button type ="button" id="bouton"><a href="index.php"><b>Accueil</b></a></button>

		<button type ="button" id="bouton"><a href="contact.php"><b>Contact</b></a></button>

		<button type ="button" id="bouton"><a href="admin/admin.php"><b>Administration</b></a></button>

		<br><br><br>

		<div class="centerist">

			<?php 

				$db = new PDO('mysql:host=exmachinefmci.mysql.db;dbname=exmachinefmci;charset=utf8', 'exmachinefmci', 'carp310M');

				$reponse = $db->query('SELECT * FROM listingEsgiGroupe4');

      			while($donnees = $reponse->fetch())
      			{
         			$prenom = $donnees['Prenom'];
         			$nom = $donnees['Nom'];
         			$cv = $donnees['Cv'];
         			$visible = $donnees['Visible'];

         			if(empty($cv) && $visible == 1)
         			{
		       			echo "<div class=\"container\"><h2>".$prenom." ".$nom."</h2><div class=\"containerContent\"><h3 style=\"color:red\">Indisponible</h3></div></div>";		       				
      				}
      				elseif(isset($cv) && $visible == 1)
      				{      					
      					echo "<div class=\"container\"><h2>".$prenom." ".$nom."</h2><div class=\"containerContent\"><h3><a href=\"".$cv."\">Voir son CV</a></h3></div></div>";
      				}
      				elseif($visible == 0)
      				{
      					echo '';
      				}

      			}

			?>	

		</div>	

	</body>

</html>