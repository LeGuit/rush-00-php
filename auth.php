<?php
/*
** auth functions
*/
$PASSWD_FILE = "passwd";
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
function user_get($users, $login)
{
	foreach ($users as $user_data)
		if ($user_data["login"] == $login)
			return ($user_data);
	return (FALSE);
}
function user_chpasswd($users, $login, $old_passwd, $new_passwd)
{
	global $PASSWD_HASH;
	if ($login == "" || $old_passwd == "" || $new_passwd == "")
		return (FALSE);
	for ($i = 0; $i < count($users); $i++)
	{
		if ($users[$i]["login"] == $login)
		{
			if ($users[$i]["passwd"] != hash($PASSWD_HASH, $old_passwd))
				return (FALSE);
			$users[$i]["passwd"] = hash($PASSWD_HASH, $new_passwd);
			return ($users);
		}
	}
	return (FALSE);
}
function user_add($users, $login, $passwd)
{
	global $PASSWD_HASH;
	if ($login === "" || $passwd === ""
		|| user_get($users, $login) !== FALSE)
		return (FALSE);
	$users[] = array(
		"login" => $login,
		"passwd" => hash($PASSWD_HASH, $passwd),
	);
	return ($users);
}
function auth($login, $passwd)
{
	global $PASSWD_HASH;
	return (($users = $users = load_users()) !== FALSE
		&& ($user = user_get($users, $login)) !== FALSE
		&& $user["passwd"] == hash($PASSWD_HASH, $passwd));
}
?>
