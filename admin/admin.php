<!DOCTYPE html>

<html>

	<head>
		<title>Administration - Les Caribous Vengeurs</title>
		<link rel="stylesheet" href="../style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap">


	</head>

	<body>

 		<div class="header">
			<h1>Les Caribous Vengeurs - Administration</h1>
		</div>

		<div class="bg"></div>

		<br><br><br><br>
 
		<a href="https://www.je-code.com/esgi1/hberleur/mosaique/index.php"><button type = "button" id="bouton"><b style="color:white">Accueil</b></button></a>
		<a href="https://www.je-code.com/esgi1/hberleur/mosaique/contact.php"><button type = "button" id="bouton"><b style="color:white">Contact</b></button></a>
		<a href="https://www.je-code.com/esgi1/hberleur/mosaique/account/account.php"><button type = "button" id="bouton"><b style="color:white">Mon compte</b></button></a>
		<a href="https://www.je-code.com/esgi1/hberleur/mosaique/admin/admin.php"><button type = "button" id="bouton"><b style="color:white">Administration</b></button></a>


 		<br>


		 	<div class="box2">

			 	<center>

			 		<section>

				 		<?php

				 			$db = new PDO('mysql:host=exmachinefmci.mysql.db;dbname=exmachinefmci;charset=utf8', 'exmachinefmci', 'carp310M');

				 			$all = $db->query('SELECT * FROM listingEsgiGroupe4');

				 			if(isset($_POST['envoi']))
				 			{
				 				$n2 = $all->rowCount();

				 				for($i = 1; $i < $n2 + 1; $i++)
				 				{
				 					$selected = $_POST['selected'.$i];

				 					$value = $i;

				 					if(isset($selected))
				 					{
				 						$db->query('UPDATE listingEsgiGroupe4 SET Visible = 1 WHERE Id ='.$value.'');
				 					}
				 					else
				 					{
				 						$db->query('UPDATE listingEsgiGroupe4 SET Visible = 0 WHERE Id ='.$value.'');
				 					}
				 				}
				 				
				 			}

				 		?>

				 		Sélectionnez les profils à afficher :

				 			<br>

				 		<form action="#" method="post" id="form" name="form" onsubmit="" class="contactForm">

				 			<?php

				 			$db = new PDO('mysql:host=exmachinefmci.mysql.db;dbname=exmachinefmci;charset=utf8', 'exmachinefmci', 'carp310M');

				 			$visible = $db->query('SELECT * FROM listingEsgiGroupe4');

					 		while($donnees = $visible->fetch())
					 		{
					 			$prenom = $donnees['Prenom'];
	         					$nom = $donnees['Nom'];
	         					$isVisible = $donnees['Visible'];
	         					$id = $donnees['Id'];
	         					$isChecked = ($isVisible==1 ? '<?php echo checked ?>' : '>');

	      						echo $prenom." ".$nom."<input type=\"checkbox\" name=\"selected".$id."\"".$isChecked."<br>";
					 		}
					 		
					 		?>
					 						 
							<input type="submit" name="envoi" value="Sauvegarder">

						</form>

					</section>

				</center>

			</div>		

	</body>

</html>
