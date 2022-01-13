<?php
require '../lib/aes.php';
require '../lib/aesctr.php';
require 'layouts/head.html';

$key = $_POST['key'];
$text = $_POST['textToEnc'];
$encText = AesCtr::encrypt($text, $key, 128);
?>

<div class="row mt-5 justify-content-center">
    <div class="col-auto">
        <input readonly disabled class="form-control text-center text-danger" type="text" value="<?php echo $encText ?>" id="input">
    </div>
    <div class="col-auto">
        <button onclick="copyFunc()" type="button" class="btn btn-outline-primary"><i class="bi bi-front">Skopiuj</i></button>
    </div>
</div>
<ul class="nav justify-content-center mt-3">
    <li class="nav-item">
        <a class="nav-link" href="../views/decrypt.php"><button type="button" class="btn btn-outline-primary">DESZYFROWANIE</button></a>
    </li>
</ul>
<?php
require 'layouts/footer.html';
