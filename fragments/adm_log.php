<?php
include "loadsave.php";
session_start();
$adm = load_from_file("../private/admin");
if($_POST["submit"] === "OK")
{
	if ($adm["mail"] === $_POST["login"] && $adm["passwd"] === hash("whirlpool", $_POST["passwd"]))
	{
		$_SESSION = array();
		$_SESSION["loggued_on_user"] = "root";
		$_SESSION["user_mail"] = $_POST["login"];
		header("Location: backoff.php");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Back-office</title>
</head>
<body>
<div style="margin-top: 100px">
<form class="forms" action="backoff-login.php" method="POST">
	<label for="id">Adresse mail : </label><input id="id" type="text" name="login" value="" />
	<br />
	<label for="pass">Mot de passe : </label><input id="pass" type="password" name="passwd" value="" />
	<br />
	<input type="submit" name="submit" value="OK" />
</form>
</div>
</body>
</html>
