<?php
include "get_content.php";
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
	<thead>
		<tr>
			<td></td>
			<td>Produit</td>
			<td>Prix </td>
			<td>R&eacute;f&eacute;rence</td>
			<td>Quantit&eacute;</td>
			<td>Supprimer</td>
		</tr>
	<?php
		$pasta = array();
		$pasta = get_pasta();
		foreach($pasta as $key=>$value): ?>
			<tr>
				<td><img src=<?php echo "img/".$value['prod_name'].".png"?>></td>
				<td><?php echo $value['prod_name'] ?></td>
				<td><?php echo $value['price'] ?> &euro;</td>
				<td><?php echo $value['ref'] ?></td>
				<td><?php echo $value['quantity'] ?></td>
				<td><input type="submit" name="submit" value=<?php echo "Supprimer ".$value['prod_name'] ?> /></td>
			</tr>
		<?php endforeach;
	 ?>	
	</thead>
	</table>	
	<div>
</div>