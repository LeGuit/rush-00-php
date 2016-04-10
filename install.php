<?php
if (file_exists("./private"))
{
	@unlink("private/users");
	@unlink("private/pasta");
	@unlink("private/sauce");
	@unlink("private/admin");
	@rmdir("./private");
}
if (!file_exists("./private"))
{
	@mkdir("./private");
}
if (!file_exists("./private/users"))
{
	$fh1 = @fopen("./private/users", 'w');
	@fclose($fh1);
}
if (!@file_exists("./private/pasta"))
{
	$fh2 = @fopen("./private/pasta", 'w');
	@fclose($hf2);
}
if (!@file_exists("./private/sauce"))
{
	$fh3 = @fopen("./private/sauce", 'w');
	@fclose($hf3);
}
if (!@file_exists("./private/admin"))
{
	$fh3 = @fopen("./private/admin", 'w');
	@fclose($hf3);
}

$tab = ['prod_name' => 'spaghetti', 'price' => 1, 'ref' => 'P_001', 'quantity' => 100];
$tab1 = ['prod_name' => 'bucatini', 'price' => 2, 'ref' => 'P_002', 'quantity' => 100];
$tab2 = ['prod_name' => 'capellini', 'price' => 1, 'ref' => 'P_003', 'quantity' => 100];
$tab3 = ['prod_name' => 'fusilli', 'price' => 3, 'ref' => 'P_004', 'quantity' => 100];
$tab4 = ['prod_name' => 'barbina', 'price' => 2, 'ref' => 'P_005', 'quantity' => 100];
$tab5 = ['prod_name' => 'pici', 'price' => 2, 'ref' => 'P_006', 'quantity' => 100];
$tab6 = ['prod_name' => 'spaghettini', 'price' => 1, 'ref' => 'P_007', 'quantity' => 100];
$tab7 = ['prod_name' => 'spaghettoni', 'price' => 3, 'ref' => 'P_008', 'quantity' => 100];

$total[] = $tab;
$total[] = $tab1;
$total[] = $tab2;
$total[] = $tab3;
$total[] = $tab4;
$total[] = $tab5;
$total[] = $tab6;
$total[] = $tab7;

file_put_contents("./private/pasta", serialize($total));

$stab = ['prod_name' => 'burro', 'price' => 1, 'ref' => 'S_001', 'quantity' => 100];
$stab1 = ['prod_name' => 'alfredo', 'price' => 1, 'ref' => 'S_002', 'quantity' => 100];
$stab2 = ['prod_name' => 'acciughe', 'price' => 1, 'ref' => 'S_003', 'quantity' => 100];
$stab3 = ['prod_name' => 'bolognese', 'price' => 1, 'ref' => 'S_004', 'quantity' => 100];
$stab4 = ['prod_name' => 'frutti di mare', 'price' => 1, 'ref' => 'S_005', 'quantity' => 100];
$stab5 = ['prod_name' => 'noci', 'price' => 1, 'ref' => 'S_006', 'quantity' => 100];
$stab6 = ['prod_name' => 'pesto', 'price' => 1, 'ref' => 'S_007', 'quantity' => 100];
$stab7 = ['prod_name' => 'romana', 'price' => 1, 'ref' => 'S_008', 'quantity' => 100];

$stotal[] = $stab;
$stotal[] = $stab1;
$stotal[] = $stab2;
$stotal[] = $stab3;
$stotal[] = $stab4;
$stotal[] = $stab5;
$stotal[] = $stab6;
$stotal[] = $stab7;

file_put_contents("./private/sauce", serialize($stotal));

$adm = ['mail' => root, 'passwd' => hash("whirlpool", "root")];
file_put_contents("./private/admin", serialize($adm));
?>
