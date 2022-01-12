<?php
require 'layouts/head.html';
?>

<form action="../views/decrypted.php" method="post">
    <input type="text" name="key" placeholder="Wprowadź klucz">
    <input type="text" name="textToDec" placeholder="Tekst do odszyfrowania">
    <button type="submit">Odszyfruj</button>
</form>

<?php
require 'layouts/footer.html';
