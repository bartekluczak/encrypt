<?php
require 'layouts/head.html';
?>
<form action="../views/encrypted.php" method="POST">
    <input type="text" name="key" placeholder="Wprowadź klucz">
    <input type="text" name="textToEnc" placeholder="Tekst do zaszyfrowania">
    <button type="submit">Zaszyfruj</button>
</form>
<?php
require 'layouts/footer.html';
