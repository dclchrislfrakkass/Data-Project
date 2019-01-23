<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OTOT</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
    integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
    crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
    integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
    crossorigin=""></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            include 'Formulaire.php';
            ?>
        </div>
    
<!-------------------------------------- ICI CE FINI LE FOND BLEU ------------------------------------------>
        
<!---------------- ici ce trouve un <p> ou ------------------->
        <div class="text">
            <p>ou</p>
        </div>

<!---------------- ici ce trouve ma carte ------------------->       
        <div class="carte"><div id="mapid"></div>
            <a href="acceuilMap.php" class="btnImg">
                <div id="textCarte">
                <p>Recherche via la carte</p>
                </div>
            </a>
        </div>


        
    </div>
    </main>
    <div class="FondVert">
<?php
include 'results.php';
?>

    </div>

    <div class="FondText">
        <p>Bonjours et Bienvenue a vous sur OVNI TRUE OVNI TENDER</p>
    </div>


    <footer>
        <div class="contact">
            <a href="contact.php">contact</a>
        </div>
    </footer>

    <script src="main.js">
    var mymap = L.map('mapid').setView([51.505, -0.09], 13);
    
    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox.streets',
            accessToken: 'your.mapbox.access.token'
        }).addTo(mymap);
    
    </script>
</body>
</html>