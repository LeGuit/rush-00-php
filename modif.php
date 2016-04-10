<?php
include "auth.php";
if (isset($_POST["submit"]) && $_POST["submit"] == "OK"
	&& ($users = load_users()) !== FALSE
	&& ($users = user_chpasswd($users, $_POST["login"], $_POST["oldpw"], $_POST["newpw"])) !== FALSE
	&& save_users($users))
	header("Location: account.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Modifier son mot de passe</title>
</head>
<body style="background-color: grey">
<?php include "fragments/head.php" ?>
<?php include "fragments/menu.php" ?>
<div>
<form class="forms" action="modif.php" method="POST">
	<label for="id">* Adresse mail : </label><input id="id" type="text" name="login" value="" />
	<br />
	<label for="oldpass">* Ancien mot de passe: </label><input id="oldpass" type="password" name="oldpw" value="" />
	<br />
	<label for="newpass">* Nouveau mot de passe: </label><input id="newpass" type="password" name="newpw" value="" />
	<br />
	<div style="font-size: 8px">
		* champs requis
	</div>
	<input type="submit" name="submit" value="OK" />
</form>
</div>
<?php include "fragments/footer.php" ?>
</body>
</html>
