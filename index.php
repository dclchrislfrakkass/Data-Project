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
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
</head>
<body>
    <header>
        <div class="entete">
            <img src="image/logoOvniTender300px.svg" alt="logo OT²" class="logo">
        </div>
    </header>

    <main>
<!-------------------------------------- Formulaire + carte + resultat---------------------------------------->

    <div class="FondBleu">
        <?php include 'php/Formulaire.php';?>
    </div>
    
    <div id="map"></div>

    <div class="FondVert">
        <h2>Résultat de votre recherche : </h2>
        <div class="results">
            <?php include 'php/results.php'; ?>
        </div>
    </div>

    </main>
    <footer>
            <a href="php/contact.php">contact</a>
    </footer>
</div>
    <script src="main.js"></script>
</body>
</html>