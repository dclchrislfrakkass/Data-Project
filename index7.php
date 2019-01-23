<head>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
    integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
    crossorigin=""/>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
    integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
    crossorigin=""></script>
    <link rel="stylesheet" href="style.css">

</head>
<!-------------------------------------- ICI CE TROUVE UN FOND BLEU ---------------------------------------->
<div class="contereurParent">
    
    <div class="FondBleu">
    <?php 
        include 'Formulaire.php';
        ?>
    </div>

<!-------------------------------------- ICI CE FINI LE FOND BLEU ------------------------------------------>

<div id="map"style="width:400px; height:400px"></div>

<?php
require 'pdo.php';
?>



        
</div>
    </main>
    <div class="FondVert">
<?php
include 'results.php';
?>

    </div>

    <div class="FondText">
        <p>Bonjour et Bienvenue a vous sur OVNI TRUE OVNI TENDER</p>
    </div>
