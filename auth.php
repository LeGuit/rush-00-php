<?php
/*
** auth functions
*/
include "loadsave.php";
$PASSWD_FILE = "users";
$PASSWD_HASH = "whirlpool";
function load_users()
{
	global $PASSWD_FILE;
	return (load_from_file($PASSWD_FILE));
}
function save_users($users)
{
	global $PASSWD_FILE;
	return (save_to_file($PASSWD_FILE, $users));
}
function user_get_name($users, $mail)
{
	foreach ($users as $user_data)
		if ($user_data["mail"] == $mail)
			return ($user_data["first_name"]);
	return (FALSE);
}
function user_get_id($users, $mail)
{
	foreach ($users as $user_data)
		if ($user_data["mail"] == $mail)
			return ($user_data);
	return (FALSE);
}
function user_get_mail($users, $mail)
{
	foreach ($users as $user_data)
		if ($user_data["mail"] == $mail)
			return ($mail);
	return (FALSE);
}
function user_chpasswd($users, $mail, $old_passwd, $new_passwd)
{
	global $PASSWD_HASH;
	if ($mail == "" || $old_passwd == "" || $new_passwd == "")
		return (FALSE);
	for ($i = 0; $i < count($users); $i++)
	{
		if ($users[$i]["mail"] == $mail)
		{
			if ($users[$i]["passwd"] != hash($PASSWD_HASH, $old_passwd))
				return (FALSE);
			$users[$i]["passwd"] = hash($PASSWD_HASH, $new_passwd);
			return ($users);
		}
	}
	return (FALSE);
}
function user_add($users, $first_name, $last_name, $mail, $passwd, $adress, $zip, $tel, $news)
{
	global $PASSWD_HASH;
	if ($mail === "" || $passwd === ""
		|| user_get_id($users, $mail) !== FALSE)
		return (FALSE);
	$users[] = array(
		"first_name" => $first_name,
		"last_name" => $last_name,
		"mail" => $mail,
		"passwd" => hash($PASSWD_HASH, $passwd),
		"adress" => $adress,
		"zip" => $zip,
		"cell"=> $tel,
		"news" => $news
	);
	return ($users);
}
function admin_add($adm, $mail, $passwd)
{
	global $PASSWD_HASH;
	if ($mail === "" || $passwd === ""
		|| user_get_id($adm, $mail) !== FALSE)
		return (FALSE);
	$adm[] = array(
		"mail" => $mail,
		"passwd" => hash($PASSWD_HASH, $passwd),
	);
	return ($adm);
}
function save_adm($adm)
{
	return (save_to_file("admin", $adm));
}
function auth($mail, $passwd)
{
	global $PASSWD_HASH;
	return (($users = load_users()) !== FALSE
		&& ($user = user_get_id($users, $mail)) !== FALSE
		&& $user["passwd"] == hash($PASSWD_HASH, $passwd));
}
?>
