<table>
	<?php foreach($array as $key=>$value): ?>
	<tr>
	<td> <?php echo $array['prod_name']> </td>
	<td> <?php echo $array['price']> </td>
	<td> <?php echo $array['ref']> </td>
	<td> <?php echo $array['quantity']> </td>
	</tr>
	<?php endforeach; ?>
</table>
