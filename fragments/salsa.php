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
			<img style="padding: 5px; width: 650px" src="img/salsa_head.png" alt="pasta_head" >
			Notre gamme de Sauces
		</h1>
		<table>
			<tr>
				s<td></td>
				<td>Produit</td>
				<td>Prix </td>
				<td>R&eacute;f&eacute;rence</td>
				<td>Quantit&eacute;</td>
			</tr>
		<?php
			$salsa = array();
			$salsa = get_sauce(); 
			foreach($salsa as $key=>$value): ?>
				<tr>
					<td><img src=<?php echo "img/".$value['prod_name'].".png"?>></td>
					<td><?php echo $value['prod_name'] ?></td>
					<td><?php echo $value['price'] ?> &euro;</td>
					<td><?php echo $value['ref'] ?></td>
					<td><?php echo $value['quantity'] ?></td>
					<td><input type="submit" name="submit" value=<?php echo "Ajouter ".$value['prod_name'] ?> /></td>
				</tr>
			<?php endforeach;
		 ?>	
		</table>
	</div>
		
</div>