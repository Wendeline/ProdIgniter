        <article>
            <h2><?php echo $titre;?></h2>
            <p><?php echo $soustitre;?></p>
            <p>
            <table class="case_orange">
            <?php
                $cpt=0;
                echo "<tr>";
                foreach ($donnees as $produit) {
                    echo '<td width="30%" id="'. $produit->refProd .'">';
                    echo img('prod/'.$produit->refProd.'.jpg','height="150" width="150"');
                    echo "<br>";
                    echo $produit->nomProd;
                    echo "<br>";
                      echo "<b>".$produit->qteStock."</b> <i>en stock</i>";
                    echo "<br>";
                    echo "<br>";
                        echo '<a class="btn" href="'. base_url('Stock/UpdatePosStock/'. $produit->refProd .'/1') .'" style="margin-right : 5px">+</a>';
                        echo '<a class="btn" href="'. base_url('Stock/UpdatePosStock/'. $produit->refProd .'/0') .'" style="margin-left  : 5px">-</a>';
                    echo "<br>";
                    echo "<br>";
                        echo '<a class="btn" href="'. base_url('Prod/Update/'. $produit->refProd) .'">Modifier</a>';
                    echo "<br>";
                    echo "<br>";
                        if ($produit->qteStock == 0) {
                          echo '<a class="btn" href="'. base_url('Prod/Delete/'. $produit->refProd) .'">Supprimer</a>';
                          echo "<br>";
                          echo "<br>";
                    }
                    echo "</td>";
                    $cpt++;
                    if ($cpt%3==0) {
                        echo "</tr><tr>";
                    }
                }
                echo "</tr>";
            ?>
            </table>
            </p>
        </article>
