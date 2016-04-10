<?php
function delete_pasta($prod_name)
{
	if (!$prod_name)
		return ;
	$i = 0;
	$str = unserialize(file_get_contents("./private/pasta"));
	foreach($str as $key)
	{
		if ($prod_name == $key['prod_name'])
		{
			$i = 1;
		}
		else
			$new_str[] = $key;
	}
	file_put_contents("./private/pasta", serialize($new_str));
	if ($i == 1)
		return TRUE;
	else
		return FALSE;
}

function delete_sauce($prod_name)
{
	if (!$prod_name)
		return ;
	$i = 0;
	$str = unserialize(file_get_contents("./private/sauce"));
	foreach($str as $key)
	{
		if ($prod_name == $key['prod_name'])
		{
			$i = 1;
		}
		else
			$new_str[] = $key;
	}
	file_put_contents("./private/sauce", serialize($new_str));
	if ($i == 1)
		return TRUE;
	else
		return FALSE;
}

?>
