<?php
    require 'datuak.php';
    include 'header.php';
?>

<main>

    <h1>Estatistikak</h1>

    <?php 
    
        $serieKopuru = 0;
        $serieAmaituKopuru = 0;
        $batazbesteBalorasio = 0;
        $balorazioAltuena = 0;

        foreach ($seriak as $serie){
            $serieKopuru++;
            if($serie['amaituta'] == true){
                $serieAmaituKopuru++;
            }
            $batazbesteBalorasio += $serie['balorazioa'];

        }
        $batazbesteBalorasio /= $serieKopuru;

        echo "<h2>Serie kopurua</h2>";
        echo "<p>$serieKopuru</p>";
        echo "<h2>Martxan dauden serieak</h2>";
        echo "<p>$serieAmaituKopuru</p>";
        echo "<h2>Batza besteko balorazioa</h2>";
        echo "<p>$batazbesteBalorasio</p>";
        echo "<h2>Baloraziorik andiena</h2>";
        echo "<p>$balorazioAltuena</p>";
    ?>

</main>

<?php
    include 'footer.php';
?>