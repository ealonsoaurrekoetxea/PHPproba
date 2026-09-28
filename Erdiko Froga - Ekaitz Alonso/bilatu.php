<?php
    require 'datuak.php';
    include 'header.php';
?>

<main>

    <h1>Tx_Series</h1>

    <form action="bilatu.php" method="post">
        <label for="serieIzena">Seriearen Izenburua:</label>
        <input type="text" id="serieIzena" name="serieIzena">
        <input type="submit" value="Bidali">
    </form>

    <?php 
        $validar = false;
        if (isset($_POST['serieIzena']) && !empty($_POST['serieIzena'])){
            foreach($series as $serie){
                if ($serie['izenburua'] == $_POST['serieIzena']){ ?>
                    <article class = "seriea">
                        <img src="<?php echo "$serie[irudia]"; ?>" alt="<?php echo "$serie[izenburua]"; ?>">
                            <div>
                                <h2><?php echo "$serie[izenburua]"; ?></h2>
                                <p><?php echo "$serie[generoa]"; ?></p>
                                <p><?php echo "$serie[denboraldiak]"; ?> denboraldi</p>
                                <p>Balorazioa: <?php echo "$serie[balorazioa]"; ?></p>
                                <p><?php if($serie['amaituta'] == true){ echo "Amaituta"; } else { echo "Martxan"; }?></p>
                            </div>
                    </article>
                <?php $validar = true;}
            }

            if ($validar == false){
                echo "Ez da serierik aurkitu.";
            }
        }
    ?>

</main>

<?php
    include 'footer.php';
?>