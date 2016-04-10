<?php
include "auth.php";
if (isset($_POST["submit"]) && $_POST["submit"] == "OK"
	&& ($users = load_users()) !== FALSE
	&& ($users = user_chpasswd($users, $_POST["login"], $_POST["oldpw"], $_POST["newpw"])) !== FALSE
	&& save_users($users))
{
	header("Location: index.html");
	echo "OK\n";
}
else
	echo "ERROR\n";
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
	Identifiant: <input type="text" name="login" value="" />
	<br />
	Ancien mot de passe: <input type="password" name="oldpw" value="" />
	<br />
	Nouveau mot de passe: <input type="password" name="newpw" value="" />
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
