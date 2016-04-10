<?php
session_start();
include "auth.php";
if (auth($_POST["mail"], $_POST["passwd"]))
{
	$users = load_users();
	$_SESSION["name"] = user_get_name($users, $_POST["mail"]);
	header("Location: account.php");
}
// else
// 	echo "Veuillez saisir des informations valides\n";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Account</title>
</head>
<body style="background-color: grey">
<?php include "fragments/head.php" ?>
<?php include "fragments/menu.php" ?>


<div>
<form class="forms" action="login.php" method="POST">
	<label for="id">Adresse mail : <input id="id" type="text" name="mail" value="" />
	<br />
	<label for="pass">Mot de passe: <input id="pass" type="password" name="passwd" value="" />
	<br />
	<input type="submit" name="submit" value="OK" />
	<a class="buttonlink" href="create.php">Creer un compte</a>
	<a class="buttonlink" href="modif.php">Modifier mon mot de passe</a>
</form>
</div>
<?php include "fragments/footer.php" ?>s
</body>
</html>