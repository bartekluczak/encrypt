<?php
require '../lib/aes.php';
require '../lib/aesctr.php';
require 'layouts/head.html';

$key = $_POST['key'];
$text = $_POST['textToDec'];

$decText = AesCtr::decrypt($text, $key, 128);
echo $decText;

require 'layouts/footer.html';
