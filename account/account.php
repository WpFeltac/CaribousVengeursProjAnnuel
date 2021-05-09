<!DOCTYPE html>

<html>

	<head>

		<title>Les Caribous Vengeurs</title>
		<link rel="stylesheet" href="../style.css">
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

					<form action="#" method="post" id="form" name="form" onsubmit="" class="contactForm">

						<b>SE CONNECTER</b>

							<br><br>

						<input type="email" name="mail" placeholder="Adresse mail MyGes">

							<br><br>

						<i>Par défaut, votre mot de passe est la première lettre de votre prénom suivie de votre nom de famille, le tout en minuscule. Exemple : tvinchent</i>

							<br>

						<input type="password" name="pwd"  maxlength="50" placeholder="Mot de passe">

							<br><br>

						<a style="color:red" href="https://www.je-code.com/esgi1/hberleur/mosaique/account/reqchangepwd.php">Changer le mot de passe</a>	

							<br><br>		
											 						 
						<input type="submit" name="envoi" value="Connexion">


					</form>

					<?php

						$db = new PDO('mysql:host=exmachinefmci.mysql.db;dbname=exmachinefmci;charset=utf8', 'exmachinefmci', 'carp310M');

						$reponse = $db->query('SELECT * FROM listingEsgiGroupe4');

						if(isset($_POST['envoi']))
						{
							if(empty($_POST['mail']) || empty($_POST['pwd']))
							{
								echo "<b style=\"color:red\">Veuillez renseigner tous les champs</b>";								
							}
							else
							{
								$found = 0;
								while($donnees = $reponse->fetch())
								{
									$id = $donnees['Id'];
									$prenom = $donnees['Prenom'];
		         					$nom = $donnees['Nom'];
		         					$mail = $donnees['Adresse Mail'];
		         					$pwd = $donnees['Mot de passe'];

		         					if($_POST['mail'] == $mail && sha1($_POST['pwd']) == $pwd)
		         					{
		         						header("Location: https://www.je-code.com/esgi1/hberleur/mosaique/account/user/?id=".$id.".php");
										exit();
		         					}

								}

								if($found == 0)
								{
									echo "<b style=\"color:red\">Adresse mail ou mot de passe incorrect</b>";
								}
							}
						}
					
						
					?>

					

				</center>

			</div>

	</body>

</html>