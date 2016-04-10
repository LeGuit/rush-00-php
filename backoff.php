<?php
include "auth.php";
include "create_content.php";
include "delete_content.php";
session_start();
$adm = load_from_file("admin");
if ($_SESSION["user_mail"] !== $adm["mail"])
	header("Location: backoff-login.php");
if (isset($_POST["submit"]) && $_POST["submit"] == "Add_User"
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
	;

else if (isset($_POST["submit"]) && $_POST["submit"] == "Change_Adm"
	&& ($users = load_from_file("private/admin")) !== FALSE
	&& ($users = admin_add($users, $_POST["login"], $_POST["passwd"])) !== FALSE
	&& save_adm($users))
	;
else if (isset($_POST["submit"]) && $_POST["submit"] == "Add_Pasta"
	&& (load_from_file("private/pasta")) !== FALSE
	&& (add_pasta($_POST["prod_name"], $_POST["price"], $_POST["ref"], $_POST["quantity"])) !== FALSE)
	;
else if (isset($_POST["submit"]) && $_POST["submit"] == "Add_Sauce"
	&& (load_from_file("private/sauce")) !== FALSE
	&& (add_sauce($_POST["prod_name"], $_POST["price"], $_POST["ref"], $_POST["quantity"])) !== FALSE)
	;
else if (isset($_POST["submit"]) && $_POST["submit"] == "Del_Pasta"
	&& (load_from_file("private/pasta")) !== FALSE
	&& (delete_pasta($_POST["prod_name"])) !== FALSE)
	;
else if (isset($_POST["submit"]) && $_POST["submit"] == "Del_Sauce"
	&& (load_from_file("private/sauce")) !== FALSE
	&& (delete_sauce($_POST["prod_name"]) !== FALSE))
	;
else if($_POST["submit"] == "Deconnexion")
{
	$_SESSION["user_mail"] = 0;
	header("Location: index.php");
}
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
		<h2>D&eacute;connexion</h2>	
		<div>
			<form class="forms" action="account.php" method="POST">
				<input style="background-color: red" type="submit" name="submit" value="Deconnexion" />
			</form>
		</div>
	</div>
	<div>
		<h2>Changer l'admin</h2>
		<form class="forms" action="backoff.php" method="POST">
			<label for="id">Identifiant : </label><input id="id" type="text" name="login" value="" />
			<br />
			<label for="admpass">Mot de passe : </label><input id="admpass" type="password" name="passwd" value="" />
			<br />
			<input type="submit" name="submit" value="Change_Adm" />
		</form>
	</div>
	<div>
		<h2>Ajouter un user</h2>	
		<form class="forms" action="backoff.php" method="POST">
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
			<label for="add">* Adresse : </label><input id="add" type="text" name="adress" value="" />
			<br />
			<label for="zip">* Code Postal : </label><input id="zip" type="text" name="zip" value="" />
			<br />
			<label for="tel">* Telephone : </label><input id="tel" type="tel" name="cell" value="" />
			<br />
			<input type="checkbox" checked name="news" value="">S'abonner &agrave; la newsletter
			<br/>
			<div style="font-size : 10px">* champs requis</div>
			<input type="submit" name="submit" value="Add_User" />
		</form>
	</div>
	<div>
		<h2>Ajouter un produit</h2>	
		<form class="forms" action="backoff.php" method="POST">
			<label for="prodname">Nom du produit : </label><input id="prodname" type="text" name="prod_name" value="" />
			<br />
			<label for="ref">R&eacute;f&eacute;rence : </label><input id="ref" type="text" name="ref" value="" />
			<br />
			<label for="price">Prix : </label><input id="price" type="text" name="price" value="" />
			<br />
			<label for="quantity">Quantit&eacute; : </label><input id="quantity" type="text" name="quantity" value="" />
			<br/>
			<input type="submit" name="submit" value="Add_Pasta" />
			<input type="submit" name="submit" value="Add_Sauce" />
		</form>
	</div>
	<div>
		<h2>Supprimer un produit</h2>	
		<form class="forms" action="backoff.php" method="POST">
			<label for="prodname">Nom du produit : </label><input id="prodname" type="text" name="prod_name" value="" />
			<br />
			<input style="background-color: red" type="submit" name="submit" value="Del_Pasta" />
			<input style="background-color: red" type="submit" name="submit" value="Del_Sauce" />
		</form>
	</div>
	<div>
		<h2>Commandes</h2>
		<table>
			<tr>
				<td>Pr&eacute;nom</td>
				<td>Nom</td>
				<td>Montant </td>
				<td>Adresse</td>
				<td>Code Postal</td>
			</tr>
			<tr>
				<td><?php echo $value['first_name'] ?></td>
				<td><?php echo $value['last_name'] ?></td>
				<td><?php echo $value['total'] ?> &euro;</td>
				<td><?php echo $value['adress'] ?> </td>
				<td><?php echo $value['zip'] ?></td>
			</tr>
		</table>
	</div>
	<?php include "fragments/footer.php" ?>
</body>
</html>