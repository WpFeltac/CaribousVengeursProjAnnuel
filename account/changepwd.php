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

					<form action="#" method="post" id="form" onsubmit="" class="contactForm">

						<b style="font-size:24px">Modification du mot de passe</b>

							<br><br>
						
						<input type="password" name="oldPwd" autofocus placeholder="Ancien mot de passe" >

							<br><br>

						<input type="password" name="newPwd" autofocus placeholder="Nouveau mot de passe" >

							<br><br>

						<input type="submit" name="envoi" value="Sauvegarder">

							<br><br>

					<?php

					$id = $_GET['id'];

					$db = new PDO('mysql:host=exmachinefmci.mysql.db;dbname=exmachinefmci;charset=utf8', 'exmachinefmci', 'carp310M');

					$reponse = $db->query('SELECT * FROM listingEsgiGroupe4 WHERE Id ='.$id);

					$oldPwd = $_POST['oldPwd'];
					$newPwd = $_POST['newPwd'];

					if(isset($_POST['envoi']))
					{
						while($donnees = $reponse->fetch())
						{
							$pwd = $donnees['Mot de passe'];

							if(isset($oldPwd) && isset($newPwd))
							{
								if(sha1($oldPwd) == $pwd)
								{
									$db->query('UPDATE listingEsgiGroupe4 SET `Mot de passe` = SHA1("'.$newPwd.'") WHERE Id ='.$id);
									echo "Nouveau mot de passe enregistré!";
								}
								else
								{
									echo "Ancien mot de passe incorrect";
								}
							}
							else
							{
								echo 'Veuillez renseigner les deux champs';
							}
						}
					}

					?>

					</form>
							
				</section>

			</center>	
													
		</div>

	</body>

</html>