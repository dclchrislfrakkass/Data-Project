<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OTOT</title>
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
    <div class="container">
    
        <div class="FondBleu">
            <?php 
                include 'php/Formulaire.php';
            ?>
        </div>
    
<!-------------------------------------- ICI CE FINI LE FOND BLEU ------------------------------------------>
        
<!---------------- ici ce trouve un <p> ou ------------------->
        <div class="text">
            <p>ou</p>
        </div>

<!---------------- ici ce trouve ma carte ------------------->       
        <div class="carte">
            <a href="php/acceuilMap.php" class="btnImg">
                <div id="textCarte">
                <p>Recherche via la carte</p>
                </div>
            </a>
        </div>


        
    </div>
    </main>
    <div class="FondVert">
    <h2>Voici le résultat de votre recherche:</h2>
<?php
include 'php/results.php';
?>

    </div>

    <div class="FondText">
        <p>Bonjours et Bienvenue a vous sur OVNI TRUE OVNI TENDER</p>
    </div>


    <footer>
        <div class="contact">
            <a href="php/contact.php">contact</a>
        </div>
    </footer>

    <script src="main.js"></script>
</body>
</html>