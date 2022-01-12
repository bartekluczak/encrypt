<?php
require '../lib/aes.php';
require '../lib/aesctr.php';
require 'layouts/head.html';

$key = $_POST['key'];
$text = $_POST['textToEnc'];
$encText = AesCtr::encrypt($text, $key, 128);
echo $encText;

require 'layouts/footer.html';
