<?php
/**
 * Created by PhpStorm.
 * User: luizm
 * Date: 17.09.2019
 * Time: 12:14
 */

?>
<html lang="de">
<head>
    <title>Megahamster | Ihr Hamsterversorger</title>
</head>
<body>
    <header id="welcome">

    </header>
    <section id="list-products">
        <?php
            require_once "Classes/RealEstate.php";
            $array_products = [
                    new LivingEstate("The Room",49,80,50,50),
                    new LivingEstate("The Flat",149,120,80,80,"Food Jars"),
                    new TrainingEstate("The Pit",69,20,"Hamster training gloves","Hamster punching sack")
            ];

            foreach ($array_products as $product) {
                echo $product->toHTML();
            }

        ?>

    </section>
    <footer id="contact">

    </footer>
</body>
</html>

