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
				<center>Les Caribous Vengeurs - Modification du mot de passe</center>
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

				<section>

					<?php

						$db = new PDO('mysql:host=exmachinefmci.mysql.db;dbname=exmachinefmci;charset=utf8', 'exmachinefmci', 'carp310M');

						$reponse = $db->query('SELECT * FROM listingEsgiGroupe4');

						if (isset($_POST['envoi']))
						{	
							if (!isset($_POST['mail'])) 
							{
								echo('Veuillez renseigner le champ.');
							}
							else 
							{
								$found = 0;
				      			while($donnees = $reponse->fetch())
				      			{
				         			$mail = $donnees['Adresse Mail'];
				         			$id = $donnees['Id'];

				         			if($_POST['mail'] == $mail)
				         			{
				         				$found = 1;

										$message = "Vous avez demandé à modifier votre mot de passe sur le projet annuel des Cariboux Vengeurs.

Afin de procéder à ce changement, veuillez cliquer sur ce lien : https://www.je-code.com/esgi1/hberleur/mosaique/account/changepwd.php/?id=".$id."

Si vous n'êtes pas à l'origine de ce changement, veuillez ignorer ce message.";

										mail($_POST['mail'], "Modification de votre mot de passe", $message);
										print "Un mail vous a été envoyé. Pensez à vérifier vos spams!";				         				
				         			}
				      			}

				      			if($found == 0)
				      			{
				      				echo "E-mail introuvable. Veuillez vous rapprocher de l'administration via le <a href=\"https://www.je-code.com/esgi1/hberleur/mosaique/contact.php\">formulaire de contact</a>.";
				      			}

							}

						}
									
					?>					

					<form action="#" method="post" id="form" onsubmit="" class="contactForm">

						<b style="font-size:24px">Modification du mot de passe</b>

							<br><br>

						Afin de modifier votre mot de passe, veuillez indiquer votre adresse MyGes :

							<br><br>
						
						<input type="email" name="mail" autofocus placeholder="Votre adresse mail" >

							<br><br>

						<input type="submit" name="envoi" value="Sauvegarder">

					</form>
							
				</section>

			</center>	
													
		</div>

	</body>

</html>