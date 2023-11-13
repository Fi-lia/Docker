<?php session_start()?>
<?php ob_start()?>

<link rel="stylesheet" href="./style.css">



<form action="#" method="post">
    <label for="nom">Nom</label>
    <input type="text" name="nom" size="10" maxlength="40" value="" id="nom" required/>
    <label for="nom">Age</label>
    <input type="nombre" name="age" size="10" maxlength="40" value="" id="age" required/>
    <input type="submit" value="valider">
</div>




<div class="multi">
<?php 



?>
</div>




<?php
$content = ob_get_clean();
$titre = "";
require "template.php";
?>