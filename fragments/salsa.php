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
		<h1>
			<img style="padding: 5px; width: 650px" src="img/pasta_head.png" alt="pasta_head" >
			Notre gamme de p&acirc;tes
		</h1>
		<table>
			<tr>
				<td>Produit</td>
				<td>Prix </td>
				<td>R&eacute;f&eacute;rence</td>
				<td>Quantit&eacute;</td>
				<td>Ajouter au Panier</td>
			</tr>
		<?php
			$salsa = array();
			$salsa = get_sauce(); 
			foreach($salsa as $key=>$value): ?>
				<tr>
					<td><?php echo $value['prod_name'] ?></td>
					<td><?php echo $value['price'] ?> &euro;</td>
					<td><?php echo $value['ref'] ?></td>
					<td><?php echo $value['quantity'] ?></td>
					<td><?php echo "Add to cart" ?></td>
				</tr>
			<?php endforeach;
		 ?>	
		</table>
	</div>
		
</div>