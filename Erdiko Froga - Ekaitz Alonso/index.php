
    <?php
        require 'datuak.php';
        include 'header.php';
    ?>

    <main>

        <h1>Tx_Series</h1>

        <section class="serieak">

            <?php 
                foreach ($series as $serie){ ?>
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
                <?php }?>

        </section>

    </main>

    <?php
        include 'footer.php';
    ?>