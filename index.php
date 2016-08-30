<!DOCTYPE html>

<html>

    <head>
        <title>Challenge 1 PHP</title>
        <meta charset="utf-8" />
    </head>

    <body>

		<form method="post" action="cible.php">
		<p>
			<label for="email">E-mail :</label>  
        	<input type="text" id="email" name="email" /> 
        </p> 
        <p>  
        	<label for="sujet">Sujet :</label>  
        	<input type="text" id="sujet" name="sujet" />  
    	</p> 
    	<p> 
    	  <label for="message">Message :</label>  
			<textarea name="message" rows="8" cols="45">
				Votre message ici.
			</textarea>
		</p>
			<input type="submit" name="envoyer" value="Valider" />
		</form>
    </body>
    </html>