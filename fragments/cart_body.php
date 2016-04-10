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
			<td>Produit</td>
			<td>Prix </td>
			<td>R&eacute;f&eacute;rence</td>
			<td>Quantit&eacute;</td>
			<td>Supprimer</td>
		</tr>
	<?php
		$pasta = array();
		$pasta = get_pasta();
		print_r($pasta); 
		foreach($pasta as $key=>$value): ?>
			<tr>
				<td><?php echo $value['prod_name'] ?></td>
				<td><?php echo $value['price'] ?> &euro;</td>
				<td><?php echo $value['ref'] ?></td>
				<td><?php echo $value['quantity'] ?></td>
				<td><?php echo "Add to cart" ?></td>
			</tr>
		<?php endforeach;
	 ?>	
	</thead>
	</table>	
	<div>
</div>