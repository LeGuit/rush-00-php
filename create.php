<?php
include "auth.php";
if (isset($_POST["submit"]) && $_POST["submit"] == "OK"
	&& ($users = load_users()) !== FALSE
	&& ($users = user_add(
		$users,
		$_POST["first_name"],
		$_POST["last_name"],
		$_POST["mail"],
		$_POST["passwd"],
		$_POST["adress"],
		$_POST["zip"],
		$_POST["cell"],
		$_POST["news"])) !== FALSE
	&& save_users($users))// && $_POST["passwd"] == $_POST["passwdcheck"])
{
	header("Location: login.php");
}
else
{
	
	echo "Veuillez saisir des informations valides\n";
}
?>
<html>
<head>
	<title>Create Account</title>
</head>
<body style="background-color: grey">
<?php include "fragments/head.php" ?>
<?php include "fragments/menu.php" ?>

<div>
<form class="forms" action="create.php" method="POST">
	<label for="firstname">* Pr&eacute;nom : </label><input id="firstname" type="text" name="first_name" value="" />
	<br />
	<label for="lastname">* Nom : </label><input id="lastname" type="text" name="last_name" value="" />
	<br />
	<label for="mail">* E-mail : </label><input id="mail" type="mail" name="mail" value="" />
	<br />
	<label for="pass">* Mot de passe : </label><input id="pass" type="password" name="passwd" value="" />
	<br/>
	<label for="pass2">* R&eacute;p&eacute;ter votre mot de passe : </label><input id="pass2" type="password" name="passwdcheck" value="" />
	<br />
	<label for="adress">* Adresse : </label><input id="add" type="text" name="adress" value="" />
	<br />
	<label for="zip">* Code Postal : </label><input id="zip" type="text" name="zip" value="" />
	<br />
	<label for="tel">* Telephone : </label><input id="tel" type="tel" name="cell" value="" />
	<br />
	<input type="checkbox" checked name="news" value="yes">S'abonner &agrave; la newsletter
	<br/>
	<div style="font-size : 10px">* champs requis</div>
	<input type="submit" name="submit" value="OK" />
</form>
</div>
<?php include "fragments/footer.php" ?>
</body>
</html>
