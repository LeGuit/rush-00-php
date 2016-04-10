<?php
include "get_content.php";
include "valid_order.php";
if ($_POST['submit'] === "Valider la commande")
{
	valid_order();
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../stylesheet.css">
</head>
<div class="container">
	<div>
		<strong>Votre panier</strong>
	</div>
	<table>
		<tr>
			<td>Produit</td>
			<td>Prix </td>
			<td>R&eacute;f&eacute;rence</td>
			<td>Quantit&eacute;</td>
		</tr>
	<?php if ($_SESSION['cart'])
	{
		foreach($_SESSION['cart'] as $key): ?>
			<tr>
				<td><?php echo $key['prod_name'] ?></td>
				<td><?php echo $key['price'] ?> &euro;</td>
				<td><?php echo $key['ref'] ?></td>
				<td><?php echo $key['quantity'] ?></td>
				<!-- <form action="cart.php" method="POST">
				<td><input type="submit" name="submit" value=<?php echo "Retirer-".$key['prod_name'] ?> /></td>
				</form> -->
			</tr>
		<?php endforeach;}
	 ?>	
	</table>
		<div>
			<form class="forms" action="index.php" method="POST">
				<input type="submit" name="submit" value="Valider la commande" />
			</form>
		</div>
	<div>
</div>