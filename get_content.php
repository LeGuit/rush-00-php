<?php
function get_pasta()
{
	$str = unserialize(file_get_contents("./private/pasta"));
	return ($str);
}
function get_sauce()
{
	$str = unserialize(file_get_contents("./private/sauce"));
	return ($str);
}
function get_adm()
{
	$str = unserialize(file_get_contents("./private/admin"));
	return ($str);
}
function get_order()
{
	$str = unserialize(file_get_contents("./private/order"));
	return ($str);
}
?>
