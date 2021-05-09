<!DOCTYPE html>

<html>

	<head>

		<title>Les Caribous Vengeurs</title>
		<link rel="stylesheet" href="https://www.je-code.com/esgi1/hberleur/mosaique/style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap">

	</head>

	<body>

		<div class="header">		
			<h1>
				<center>Les Caribous Vengeurs - Mon Compte</center>
			</h1>
		</div>

		<div class="bg"></div>

			<br><br><br><br>

		<a href="https://www.je-code.com/esgi1/hberleur/mosaique/index.php"><button type = "button" id="bouton"><b style="color:white">Accueil</b></button></a>
		<a href="https://www.je-code.com/esgi1/hberleur/mosaique/contact.php"><button type = "button" id="bouton"><b style="color:white">Contact</b></button></a>
		<a href="https://www.je-code.com/esgi1/hberleur/mosaique/account/account.php"><button type = "button" id="bouton"><b style="color:white">Mon compte</b></button></a>
		<a href="https://www.je-code.com/esgi1/hberleur/mosaique/admin/admin.php"><button type = "button" id="bouton"><b style="color:white">Administration</b></button></a>			

			<br><br><br>

		<div class="box2">

				<center>

					<?php

					$id = str_replace(".php", "", $_GET['id']);

					$db = new PDO('mysql:host=exmachinefmci.mysql.db;dbname=exmachinefmci;charset=utf8', 'exmachinefmci', 'carp310M');

					$reponse = $db->query('SELECT * FROM listingEsgiGroupe4 WHERE Id ='.$id);

					while($donnees = $reponse->fetch())
					{
						$name = $donnees['Prenom'];
						echo "<b style=\"font-size:24px\">Bienvenue dans votre espace de gestion, ".$name."</b><br><br>";
					}

					if(isset($_POST['envoi']))
				 	{

				 		if(isset($_POST['selected']))
				 		{
							$db->query('UPDATE listingEsgiGroupe4 SET Visible = 1 WHERE Id ='.$id);
		 				}
		 				else
						{
							$db->query('UPDATE listingEsgiGroupe4 SET Visible = 0 WHERE Id ='.$id);				 				
				 		}
		 			}	

					?>

					<form action="#" method="post" id="form" name="form" onsubmit="" class="contactForm">

						<?php

							$db = new PDO('mysql:host=exmachinefmci.mysql.db;dbname=exmachinefmci;charset=utf8', 'exmachinefmci', 'carp310M');

							$reponse = $db->query('SELECT * FROM listingEsgiGroupe4 WHERE Id ='.$id);

					 		while($donnees = $reponse->fetch())
					 		{
	         					$isVisible = $donnees['Visible'];
	         					$isChecked = ($isVisible == 1 ? '<?php echo checked ?>' : '>');

	      						echo "Ma case est visible dans la liste générale :<input type=\"checkbox\" name=\"selected\"".$isChecked."<br>";
					 		}
					 		
					 		?>
				 								 						 
							<input type="submit" name="envoi" value="Sauvegarder">

					</form>

				</center>

			</div>

	</body>

</html>