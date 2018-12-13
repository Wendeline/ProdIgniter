<article>
    <p>
        <?php

        //Valeur Stock total
        $lesProd = Produit::all();
        $prix = 0;
        foreach ($lesProd as $prod) {
            $stockProd = $prod->qteStock;
            $prixProd = $prod->PUHTProd;
            $prix = $prix + $prixProd*$stockProd;
        }
        echo "La valeur de votre stock total est de ". $prix."€. <br><br>";
        //Valeur stock par produit
        echo "Valeur de votre stock par produit : <br>";
        foreach ($lesProd as $prod) {
            $stockProd = $prod->qteStock;
            $prixProd = $prod->PUHTProd;
            $price = $prixProd*$stockProd;
            echo $prod->refProd . " -> ". $price."€ <br>";
            $price = 0;
        }
        
        ?>
    </p>
</article>