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

function add_to_cart($id, $prod_name, $price, $ref, $quantity)
{
	if (!$prod_name || !strlen($price) || !$ref || !strlen($quantity))
		return ;
	$cart = unserialize(file_get_contents("./private/cart"));
	// foreach($cart as $key)
	// {
	// 	if ($key['session_id'] == $id)
	// 	{
	// 		$my_cart = $key;
	// 		break;
	// 	}
	// }
	$cart[] = ['session_id' => $id, 'prod_name' => $prod_name, 'price' => $price , 'ref' => $ref, 'quantity' => $quantity];
	file_put_contents("./private/cart", serialize($cart));
}

?>
