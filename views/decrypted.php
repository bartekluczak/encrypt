<?php
require '../lib/aes.php';
require '../lib/aesctr.php';
require 'layouts/head.html';

$key = $_POST['key'];
$text = $_POST['textToDec'];
$decText = AesCtr::decrypt($text, $key, 128);
?>

<div class="row mt-5 justify-content-center">
    <div class="col-auto">
        <input readonly disabled class="form-control text-center text-danger" type="text" value="<?php echo $decText ?>" id="input">
    </div>
    <div class="col-auto">
        <button onclick="copyFunc()" type="button" class="btn btn-outline-primary"><i class="bi bi-front">Skopiuj</i></button>
    </div>
</div>
<?php
require 'layouts/footer.html';
