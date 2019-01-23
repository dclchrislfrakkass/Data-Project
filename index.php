<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OTOT</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
    integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
    integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
    crossorigin=""></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
=======
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="https://fonts.googleapis.com/css?family=Kurale" rel="stylesheet"> 
>>>>>>> master
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
        <!-- <div class="text">
            <p>ou</p>
        </div> -->

<!---------------- ici ce trouve ma carte ------------------->       
<div id="mymap"style="width:400px; height:400px"></div>



        
    </div>
    </main>
    <div class="FondVert">
    <h2>Voici le résultat de votre recherche:</h2>
<?php
include 'results.php';
?>

    </div>

    <div class="FondText">
        <p>Bonjour et Bienvenue a vous sur OVNI TRUE OVNI TENDER</p>
    </div>


    <footer>
        <div class="contact">
            <a href="contact.php">contact</a>
        </div>
    </footer>
<script src="app.js"></script>


</body>
<!--
    // var mymap = L.map('map').setView([51.505, -0.09], 13);
    // var lat ="<?php echo $lat ?>";
    // var long ="<?php echo $long ?>";
    // var map = L.map('map').setView([lat , long], 11);
    // var marker = L.marker([lat, long]).addTo(map);

    // L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    //     attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    // }).addTo(map);

    // // L.marker([51.5, -0.09]).addTo(map)
    // //     .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    // //     .openPopup();



// <script>
//     var lat ="<?php echo $lat ?>";
//     var long ="<?php echo $long ?>";
//     var map = L.map('map').setView([lat , long], 11);
//     var marker = L.marker([lat, long]).addTo(map);

//     L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
//         attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
//     }).addTo(map);

//     // L.marker([51.5, -0.09]).addTo(map)
//     //     .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
//     //     .openPopup();


//     </script>
</html>