<?php

require_once 'konstrak.php';

$sepatu = new sepatu('Nike','38','Putih dan garis hitam');
echo "Nama Sepatu = ".$sepatu->get_namasepatu();
echo "<br />";
echo "Ukuran = ".$sepatu->get_ukuran();
echo "<br />";
echo "Warna = ".$sepatu->get_warna();
echo "<br />";
?>