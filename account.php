<?php
session_start();
if($_POST["submit"] == "Deconnexion")
{
	$_SESSION["user_mail"] = 0;
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Account</title>
</head>
<body style="background-color: grey">
<?php include "fragments/head.php" ?>
<?php include "fragments/menu.php" ?>
<div>
	<form class="forms" action="account.php" method="POST">
		<input type="submit" name="submit" value="Deconnexion" />
	</form>
</div>
<?php include "fragments/footer.php" ?>s
</body>
</html>