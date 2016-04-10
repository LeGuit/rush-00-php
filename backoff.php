<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>FT_MINISHOP</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body style="background-color: grey">
<?php include "fragments/head.php" ?>
	<div>
		<h2>Ajouter un admin</h2>
		<form class="forms" action="new_admin.php" method="POST">
			<label for="id">Identifiant : </label><input id="id" type="text" name="login" value="" />
			<br />
			<label for="admpass">Mot de passe : </label><input id="admpass" type="password" name="passwd" value="" />
			<br />
			<input type="submit" name="submit" value="Add Admin" />
		</form>
	</div>
	<div>
		<h2>Ajouter un user</h2>	
		<form class="forms" action="create.php" method="POST">
			<label for="firstname">* Pr&eacute;nom : </label><input id="firstname" type="text" name="first_name" value="" />
			<br />
			<label for="lastname">* Nom : </label><input id="lastname" type="text" name="last_name" value="" />
			<br />
			<label for="mail">* E-mail : </label><input id="mail" type="mail" name="mail" value="" />
			<br />
			<label for="pass">* Mot de passe : </label><input id="pass" type="password" name="passwd" value="" />
			<br/>
			<label for="pass2">* R&eacute;p&eacue;ter votre mot de passe : </label><input id="pass2" type="password" name="passwdcheck" value="" />
			<br />
			<label for="add">* Adresse : </label><input id="add" type="text" name="adress" value="" />
			<br />
			<label for="zip">* Code Postal : </label><input id="zip" type="text" name="zip" value="" />
			<br />
			<label for="tel">* Telephone : </label><input id="tel" type="tel" name="cell" value="" />
			<br />
			<input type="checkbox" checked name="news" value="">S'abonner &agrave; la newsletter
			<br/>
			<div style="font-size : 10px">* champs requis</div>
			<input type="submit" name="submit" value="Add User" />
		</form>
	</div>
	<div>
		<h2>Ajouter un produit</h2>	
		<form class="forms" action="create.php" method="POST">
			<label for="prodnam">Nom du produit : </label><input id="prodname" type="text" name="prod_name" value="" />
			<br />
			<label for="ref">R&eacute;f&eacute;rence : </label><input id="ref" type="text" name="ref" value="" />
			<br />
			<label for="price">Prix : </label><input id="price" type="text" name="price" value="" />
			<br />
			<label for="quantity">Quantit&eacute; : </label><input id="quantity" type="text" name="quantity" value="" />
			<br/>
			<input type="submit" name="submit" value="Add product" />
		</form>
	</div>
</body>
</html>