<?php
require_once 'phpqrcode/qrlib.php';
$text=$_POST['text'];
QRcode::png($text);
