<?php
function add_to_cart($prod_name)
{
	$prix;
	$reference;
	$quantite;
	$str = array();
	if (!$_SESSION['cart'])
		$_SESSION['cart'] = array();
	// foreach($_SESSION['cart'] as $key)
	// {
	// 	if ($key['prod_name'] == $prod_name)
	// 	{
	// 		$key['quantity'] += 1;
	// 		$key['total_price'] += $key['total_price'];
	// 		echo "coucouc";
	// 		return ;
	// 	}
	// }
	$s = unserialize(file_get_contents("./private/pasta"));
	foreach($s as $key)
	{
		if ($prod_name == $key['prod_name'])
		{
			$i = 1;
			$prix = $key['price'];
			$reference = $key['ref'];
			$quantite = 1;
			break;
		}
	}
	$s = unserialize(file_get_contents("./private/sauce"));
	foreach($s as $key)
	{
		if ($prod_name == $key['prod_name'])
		{
			$prix = $key['price'];
			$reference = $key['ref'];
			$quantite = 1;
			break;
		}
	}
	$str = ['session_id' => $_SESSION['user_mail'], 'prod_name' => $prod_name, 'price' => $prix, 'ref' => $reference, 'quantity' => $quantite, 'total_price' => $prix];
	array_push($_SESSION['cart'], $str);
}
function delete_cart()
{
	$_SESSION['cart'] = 0;
}
function valid_order()
{
	$nom;
	$prenom;
	$address;

	if (!$_SESSION['user_mail'] || !$_SESSION['cart'])
		return;
	$prix = 0;
	$str = $_SESSION['cart'];
	foreach($str as $key)
	{
		$prix += $key['total_price'];
	}
	$s = unserialize(file_get_contents("./private/users"));
	foreach($s as $key)
	{
		if ($_SESSION['user_mail'] == $key['mail'])
		{
			$nom = $key['last_name'];
			$prenom = $key['first_name'];
			$address = $key['adress'];
			$zip = $key['zip'];
		}
	}
	$new_str = unserialize(file_get_contents("./private/order"));
	$new_str[] =['first_name' => $prenom, 'last_name' => $nom, 'total_price' => $prix, 'adress' => $address, 'zip'=> $zip, 'session_id' => $_SESSION['user_mail']];
	file_put_contents("./private/order", serialize($new_str));
	delete_cart();
}
