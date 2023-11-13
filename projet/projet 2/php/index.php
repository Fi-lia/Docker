<?php ob_start() ?>
<link rel="stylesheet" href="./style.css">



<form action="#" method="post">
    <div class="multi">
    <button name="lang"><img src="france.png" alt="fr"></button>
    <button name="lang2"><img src="royaume-uni.png" alt="en"></button>
    <button name="lang3"><img src="espagne.png" alt="esp"> </button>
</div>
</form>



<div class="multi">
<?php 
    if(isset($_POST["lang"])){
       echo " <h1>Bienvenue sur mon site</h1> <h2>je suis développeur Web</h2><p>Actuellemet en formation en développeur Web et Web mobile, je suis à la recherche d'un stage afin de mettre en pratique mes acquis théoriques.</p>";
    }elseif(isset($_POST["lang2"])){
        echo "<h1>Welcome on my website</h1> <h2>I'm a web developer</h2><p>I'm currently training to become a web and mobile web developer, and I'm looking for an internship to put my theoretical knowledge into practice.</p>";
    }elseif(isset($_POST["lang3"])){
    echo "<h1>Bienvenido a mi sitio web</h1> <h2>Soy desarrollador web</h2><p>Actualmente me estoy formando para ser desarrollador web y web móvil, y estoy buscando unas prácticas para poner en práctica mis conocimientos teóricos.</p>";
    }
?>
</div>




<?php
$content = ob_get_clean();
$titre = "";
require "template.php";
?>