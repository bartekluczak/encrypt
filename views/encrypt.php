<?php
require 'layouts/head.html';
?>
<div class="container justify-content-center col-lg-4 mt-5">
    <form class="row g-3" action="../views/encrypted.php" method="POST">
        <div class="col-md-6">
            <label for="inputKey" class="form-label">Wprowadź klucz</label>
            <input type="text" class="form-control" id="inputKey" name="key" placeholder="">
        </div>
        <div class="col-md-6">
            <label for="inputText" class="form-label">Tekst do zaszyfrowania</label>
            <input type="text" name="textToEnc" class="form-control" id="inputPassword4" placeholder="">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Szyfruj</button>
        </div>
    </form>
</div>
<?php
require 'layouts/footer.html';
