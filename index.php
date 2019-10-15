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
            use Protonigramer\Megahamster AS Megahamster;
            require_once "vendor/autoload.php";

            $array_products = [
                    new Megahamster\LivingEstate("The Room",49,80,50,50),
                    new Megahamster\LivingEstate("The Flat",149,120,80,80,"Food Jars"),
                    new Megahamster\TrainingEstate("The Pit",69,20,"Hamster training gloves","Hamster punching sack")
            ];

            foreach ($array_products as $product) {
                /* @var $product \Protonigramer\Megahamster\RealEstate */
                echo $product->toHTML();
            }

        ?>

    </section>
    <footer id="contact">

    </footer>
</body>
</html>

