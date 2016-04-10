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
				<td></td>
				<td>Produit</td>
				<td>Prix </td>
				<td>R&eacute;f&eacute;rence</td>
				<td>Quantit&eacute;</td>
				<td></td>
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
					<td><input type="submit" name="submit" value=<?php echo "Ajouter ".$value['prod_name'] ?> /></td>
				</tr>
			<?php endforeach;
		 ?>	
		</table>
	</div>
		
</div>