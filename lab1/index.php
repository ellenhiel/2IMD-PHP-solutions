<?php
    /*
        todo1: maak een multidimensionale array met daarin alle checkins zoals te zien op screenshots/screenshot1.png
            - denk na over welke data er in je array moet zitten
            - soms voeg je een foto toe, soms niet (tip: gebruik voor je foto's pexels.com of een andere gratis leverancier)
            - op screenshots/screenshot2.jpeg kan je zien wat bedoelt wordt met een checkin met foto
            - werk met isset() of empty() om de foto soms wel en soms niet af te drukken


        todo2: werk met een constant DISTANCE waarmee je kan instellen wat de maximale afstand is om checkins voor te tonen
            - je zal in je array een extra stukje data moeten bijvoegen om deze afstand mee te betrekken in je checkins

    */
    $checkins = [
        [
            "picture" => "picture1.jpg",
            "username" => "Jesse",
            "title" => "Assembly 3.0",
            "place" => "San Francisco, CA",
            "text" => "Le work."
        ],
        [
            "picture" => "picture2.jpg",
            "username" => "Michal",
            "title" => "Voxer",
            "place" => "San Francisco, CA",
            "text" => ""
        ],
        [
            "picture" => "picture3.jpg",
            "username" => "Petr",
            "title" => "ROXY/NoD",
            "place" => "Prague, Czech Republiv",
            "text" => ""
        ],
        [
            "picture" => "picture4.jpg",
            "username" => "Jaroslav",
            "title" => "Brno hlavni nadrazi",
            "place" => "Brno, Czech Republiv",
            "text" => ""
        ],
        [
            "picture" => "picture5.jpg",
            "username" => "Jesse",
            "title" => "The Mill",
            "place" => "San Francisco, CA",
            "text" => ""
        ],
        [
            "picture" => "picture6.jpg",
            "username" => "Matej",
            "title" => "MassVentures",
            "place" => "",
            "text" => ""
        ]
    ];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">    
    <title>Swarm App</title>
</head>

<body>

    <header>
        <?php
    include_once("header.inc.php");
    ?>
    </header>

    <ul>
        <?php // todo3 : lus over je checkins en print deze visueel af zoals op de screenshots/screenshot1.png
    foreach ($checkins as $checkin):
    ?>
        <li>
            <img class="picture" src="images/<?php if (isset($checkin['picture'])){
                echo $checkin['picture'];
            } else {}
            ?>" alt="image">
            
            <p class="username"><?php echo $checkin['username']; ?></p>
            <p class="title"><?php echo $checkin['title']; ?></p>
            <p class="place"><?php echo $checkin['place']; ?></p>
            <p class="text"><?php if (isset($checkin['text'])){
                echo $checkin['text'];
            } else {}
            ?></p>
        </li>
        <?php endforeach; ?>
    </ul>


    <?php // todo4 : zorg dat je header en footer opgehaald wordt vanuit footer.inc.php en header.inc.php zodat je deze kan hergebruiken op meerdere schermen
    ?>
    <footer>
        <?php
    include_once("footer.inc.php"); 
    ?>
    </footer>
</body>

</html>