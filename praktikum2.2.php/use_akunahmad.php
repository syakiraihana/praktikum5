<?php
require_once 'class_akun.php';

$ac1 = new account('C001', 6000000);
echo 'Sebelum Ahmad menabung : <br>';
$ac1->cetak();

echo '<br/>';

$ac1->deposit(1000000);
echo '<br/>Setelah Ahmad menabung sebesar Rp.1000.000 :<br>';
$ac1->cetak();
?>