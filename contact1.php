<!DOCTYPE html>
<html>
<head>
	<title>Contact - Les Caribous Vengeurs</title>
	<link rel="stylesheet" href="style.css">
</head>
		
<h1>
	<center>Les Caribous Vengeurs</center>
</h1>

		
		<button type = "button" id="bouton"><a href="index.php"><b>Accueil</b></a></button>

		<button type = "button" id="bouton"><a href="contact.php"><b>Contact</b></a></button>

		<button type = "button" id="bouton"><a href="admin.php"><b>Administration</b></a></button>
		<br>
  	<center>
    <div class="formulaire">
      <form action="envoi.php" method="post">
          Nom :     <input type="text" name="nom" placeholder="Nom" class="sdl"/><br>
          Prénom :  <input type="text" name="prenom" placeholder="Prénom" class="sdl"/><br>
          Civilité :      <label>M.</label>
 		  <input type="radio" name="civilite" class="sdl"> 
		  <label>Mme.</label>
 		  <input type="radio" name="civilite" class="sdl"> <br> 
          Date de naissance : <input  class="sdl" type="Date" name="naissance" placeholder="Date"/><br>
          Pays <select name="pays" id="form-pays" class="sdl"> 
 			<option>France</option>
 			<option>Espagne</option>
 			<option>Belgique</option>
 			</select> <br> 
          Adresse mail : <input  class="sdl" type="text" name="mail" placeholder="Mail" /><br>
          Téléphone : <input type="text"  class="sdl" name="tel" placeholder="Téléphone" /><br>
          Objet : <input type="text"  class="sdl" name="objet" placeholder="Objet" /><br>
          Message : <br> <textarea type="text" class="sdl" name="message" placeholder="Message"></textarea><br>

         

 			
         <input type="submit" name="submit" class="anim">
 

      </form>
	</center>
  </body>
</html>
