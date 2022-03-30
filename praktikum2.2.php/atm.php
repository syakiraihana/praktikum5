<?php
require_once 'class_bankakun.php';

$ab1 = new Bankaccount('C001',7000000,'Ahmad');
$ab2 = new Bankaccount('C002',5350000,'Budi');
$ab3 = new Bankaccount('C003',2500000,'Kurniawan');

echo 'Sebelum transfer<br/>';
$ab1->cetak();
echo '<br/>';
$ab3->cetak();

$ab1->transfer($ab3,1500000);
echo '<hr/>Sesudah transfer <br/>';
$ab1->cetak();
echo '<br/>';
$ab3->cetak();
echo '<br/>';

echo '<hr/>Sebelum transfer<br/>';
$ab1->cetak();
echo '<br/>';
$ab2->cetak();

$ab1->transfer($ab2,500000);
echo '<hr/>Sesudah transfer <br/>';
$ab1->cetak();
echo '<br/>';
$ab2->cetak();
echo '<br/>';
?>