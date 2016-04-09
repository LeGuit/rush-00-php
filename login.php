<?php
include "auth.php";
if (isset($_POST["submit"]) && $_POST["submit"] == "OK"
	&& ($users = load_users()) !== FALSE
	&& ($users = user_add($users, $_POST["login"], $_POST["passwd"])) !== FALSE
	&& save_users($users))
{
	header("Location: index.html");
	echo "OK\n";
}
// else
// {
// 	header("Location: create.html");
// 	echo "ERROR\n";
// }
?>
<html>
<head>
	<title>Create Account</title>
</head>
<body style="background-color: grey">
<?php include "fragments/head.php" ?>

<div>
<form class="forms" action="create.php" method="POST">
	Identifiant: <input type="text" name="login" value="" />
	<br />
	Mot de passe: <input type="password" name="passwd" value="" />
	<br />
	<input type="submit" name="submit" value="OK" />
	<a class="buttonlink" href="create.php">Creer un compte</a>
	<a class="buttonlink" href="modif.php">Modifier mon mot de passe</a>
</form>
</div>
<?php include "fragments/footer.php" ?>

</body>
</html>
