<?php
function add_pasta($prod_name, $price, $ref, $quantity)
{
	if (!$prod_name || !strlen($price) || !$ref || !strlen($quantity))
		return ;
	$str = unserialize(file_get_contents("./private/pasta"));
	$str[] =['prod_name' => $prod_name, 'price' => $price , 'ref' => $ref, 'quantity' => $quantity];
	file_put_contents("./private/pasta", serialize($str));
}

function add_sauce($prod_name, $price, $ref, $quantity)
{
	if (!$prod_name || !strlen($price) || !$ref || !strlen($quantity))
		return ;
	$str = unserialize(file_get_contents("./private/sauce"));
	$str[] =['prod_name' => $prod_name, 'price' => $price , 'ref' => $ref, 'quantity' => $quantity];
	file_put_contents("./private/sauce", serialize($str));
}
?>
