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
?>
