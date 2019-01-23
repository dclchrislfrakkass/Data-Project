<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OTOT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
    integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
    crossorigin=""/>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
    integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
    crossorigin=""></script>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>

    <header>
        <div class="entete">
            <!-- <img src="image/LOVNI.svg"> -->
        </div>

    </header>

    <main>
<!-------------------------------------- ICI CE TROUVE UN FOND BLEU ---------------------------------------->
    <div class="contereurParent">
    
        <div class="FondBleu">
            <?php 
                include 'php/Formulaire.php';
            ?>
        </div>
    
        <div id="map"style="width:360px; height:360px"></div>
<!-------------------------------------- ICI CE FINI LE FOND BLEU ------------------------------------------>
                
        <div class="FondVert">
        <h2>Voici le résultat de votre recherche:</h2>
        <?php
        include 'php/results.php';
        ?>

        </div>
    </div>
    </main>

    <div class="FondText">
        <p>Bonjours et Bienvenue a vous sur OVNI TRUE OVNI TENDER</p>
    </div>


    <footer>
        <div class="contact">
            <a href="php/contact.php">contact</a>
        </div>
    </footer>
</div>
    <script src="main.js"></script>
</body>
</html>