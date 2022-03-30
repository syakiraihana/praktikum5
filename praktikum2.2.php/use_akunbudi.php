<?php
require_once 'class_akun.php';

$ac1 = new account('C002', 5850000);
echo 'Sebelum Budi tarik uang : <br>';
$ac1->cetak();

echo '<br/>';

$ac1->withdraw(2500000);
echo '<br/>Setelah Budi tarik uang sebesar Rp. 2500000 :<br>';
$ac1->cetak();
?>