<?php
    echo '<div class="container">';
        $key = 0;
        foreach ($produits as $produit) {
            if ($key % 3 == 0) {
                echo '<div class="row">';
            }
            echo '<div class="col l4 m4 s6">';
                echo '<a href="produit.php?ref='. $produit->idRef .'">';
                    echo '<div class="card">';
                        echo '<div class="card-image">';
                        /**/echo img('produit/' . $produit->imageP);
                        /**/echo '<span class="card-title">'. $produit->nomP .'</span>';
                        echo '</div>';

                        echo '<div class="card-action">';
                        /**/echo '<a href="produit.php?ref='. $produit->idRef .'" class="waves-effect waves-light btn">Voir le produit</a>';
                        echo '</div>';
                    echo '</div>';
                echo '</a>';

            echo '</div>';
            $key++;
            if ($key % 3 == 0) {
                echo '</div>';
            }
        }
        if ($key % 3 != 0) {
            echo '</div>';
        }
    echo '</div>';
?>
