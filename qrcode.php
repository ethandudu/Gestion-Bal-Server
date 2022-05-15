<?php
include('phpqrcode/qrlib.php'); //On inclut la librairie au projet
QRcode::png($_GET['hash'], 'qrcode.png', QR_ECLEVEL_H, 10); // On crée notre QR Code
echo "ok";
?>