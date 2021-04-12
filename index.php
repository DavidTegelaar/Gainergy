<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="language" content="NL">
    <meta name="description" content="Gainergy, Energy, Drink">
    <meta name="keywords" content="Gainergy, Energy, Drink">
    <meta name="author" content="David Tegelaar">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gainergy</title>
    <link rel="stylesheet" href="css/index.css?v=<?php echo time(); ?>">


</head>
<!-- PHP DATABASE -->
<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "energy";
$conn = new mysqli($host, $user, $pass, $database);
if ($conn->connect_error) {
    echo "verbinding mislukt";
}

$sql = "SELECT * FROM evenementen LEFT JOIN artiesten ON evenementen.artiest_id = artiesten.artiest_id LEFT JOIN locaties ON evenementen.locatie_id = locaties.locatie_id  WHERE evenementen.datum > NOW() ORDER by evenementen.datum LIMIT 0,3";
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_row()) {
      ?>

 <article class="evenementen-namen">
          <h1>Artiest: <?php echo $row[6];?></h1> <br>
          <h1>Locatie: <?php echo $row[14];?></h1> <br>
          <h1>Max Bezoekers: <?php echo $row[4];?></h1> <br>
          <h1>Datum: <?php echo $row[1];?></h1> <br>
    </article>

<?php
    } 

}
$result->close();
$conn->close(); 

?>
<!-- END PHP DATABASE -->

<body>
    <header>
        <article class="item-logo">
            <img src="pictures/logo.png" height="130" width="180">
        </article>

        <article class="item_nav">
            <ul>
                <li><a href="index.php">Homepage</a></li>
                <li><a href="Product.html">Product</a></li>
                <li><a href="Overons.html">Over ons</a></li>
                <li><a href="GoedeDoelen.html">Goede Doelen</a></li>
                <li><a href="FAQ.html">FAQ</a></li>
                <li><a href="Contact.html">Contact</a></li>
            </ul>
        </article>
    </header>

<article class="Text1">
    <h1>Producten</h1> 
</article>

<!-- PRODUCT 1 -->
<section class="index-producten">
    <article class="producten">
        <a href="Product.html"><img src="pictures/Can Template Original Flavor.png" alt="product"></a>
    </article>
<!-- PRODUCT 2 -->
    <article class="producten">
        <a href="Product.html"><img src="pictures/Can Template Blueberry.png" alt="product"></a>
    </article>
<!-- PRODUCT 3 -->
    <article class="producten">
        <a href="Product.html"><img src="pictures/Can Template Coffee.png" alt="product"></a>
    </article>
</section>



<article class="Text2">
    <h1>Evenementen</h1> 
</article>

<!-- EVENEMENT 1 -->
<section class="index-evenementen">
    <article class="evenementen">
        <a href="index-eventDetails.php"><img src="pictures/Tones and I.png" alt="evenement1" height="230" width="415"></a>
    </article>
<!-- EVENEMENT 2 -->
    <article class="evenementen">
        <a href="index-eventDetails.php"><img src="pictures/PostMalone.png" alt="evenement2" height="230" width="416"></a>
    </article>
<!-- EVENEMENT 3 -->
    <article class="evenementen">
        <a href="index-eventDetails.php"><img src="pictures/Tones and I.png" alt="evenement3" height="230" width="415"></a>
    </article>
</section>



<article class="Text3">
    <h1>Kortingen</h1>
</article>

<!-- KORTING 1 -->
<section class="index-Kortingen">
    <article class="kortingen">
        <img src="pictures/knalkorting.png" alt="kortingen" height="226">
        <h1>We beginnen de maand april <br> al goed met deze... <br><br> <a href="index-kortingen.php"> KNAL KORTING</a>!</h1>
    </article>
<!-- KORTING 2 -->
    <article class="kortingen">
        <img src="pictures/vol-leeg.png" alt="kortingen" height="232">
        <h1>Bij inlevering van 12 lege blikjes krijg je 1 volle! <br><br> Bekijk <a href="index-kortingen.php">hier</a> Meer!</h1></a>
    </article>
<!-- KORTING 3 -->
    <article class="kortingen">
        <img src="pictures/lente-actie.png" alt="kortingen" height="246" width="415">
        <h1>De Lente is begonnen en dat betekend Nieuwe energie <br> voor de halve prijs! <br><br> Bekijk <a href="index-kortingen.php">hier</a> Meer!</h1></a>
    </article>
</section>



<div class="footer">
    <p>Gainergy <br> Poelweteringpad 5 2333 BM Leiden | 071 569 071 0 <br> info@Gainergy.nl <br> © Copyright 2021 Gainergy</p>
</div>
    

</body>
</html>
