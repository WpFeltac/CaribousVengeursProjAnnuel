<!DOCTYPE html>
<html>

	<head>
		<title>Contact - Les Caribous Vengeurs</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap">

	</head>

	<body>

		<div class="header">
			<h1>Les Caribous Vengeurs - Page de Contact</h1>
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

						if (isset($_POST['envoi']))
						{	
							if (!isset($_POST['message']) || $_POST['message']=='') 
							{
								echo('Vous avez oublié d\'ins&eacute;rer un message<br>');
							}
							else 
							{
								mail("hberleur@gmail.com", "Un message vous a été envoyé depuis votre projet annuel", $_POST["message"]);
								print "Le message \"".$_POST["message"]."\" a bien été envoyé";
							}

							// assignation de la variable mail si aucune adresse mail renseignée
							if (empty($_POST['mail'])) 
							{
								echo('Vous n\'avez pas renseigné d\'adresse mail.');
							}
						}
									
					?>					

					<form action="#" method="post" id="form" onsubmit="" class="contactForm">
						
							<input type="text" name="nom" autofocus  placeholder="Nom">*

								<br><br>										
											
							Mr  <input type="radio" name="civ">
							Mme <input type="radio" name="civ">*
											
								<br><br>

							<input type="email" name="mail" placeholder="Adresse mail" >*

								<br><br>

							<input type="tel" name="tel"  maxlength="10" placeholder="Téléphone">*
							
								<br><br>
											
							<center>	Pays

								<select name="pays"  >
												
									<option>FR</option>
									<option>BE</option>
									<option>ESP</option>
									<option>RU</option>

								</select>*
							</center>

								<br>

							<center>
														
								Age :

							</center>


							<input type="number" name="age" maxlength="2" placeholder="Age">*

								<br><br>

										
							<textarea name="message" placeholder="Votre message"></textarea>

								<br><br>


							J'accepte la conservation des données* <input type="checkbox" name="valid" >

								<br><br>
																						
							<input type="submit" name="envoi" onsubmit="">

								<br><br>

					
							<span style="color: red">

								Les champs marqués d'un * sont obligatoires

									<br>
							</span>

					</form>
							
				</section>

			</center>	
													
		</div>

	</body>

</html>