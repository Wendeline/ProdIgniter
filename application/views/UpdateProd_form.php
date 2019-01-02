<article>
    <p>
        <?php
        //var_dump($produit);
        echo form_open_multipart('Prod/Modif/'.$produit->refProd);
        echo form_fieldset('Modifier un produit');
            echo form_label('Référence','ref');
            echo form_input('ref', $produit->refProd, "disabled");
            echo '<br>';
            echo form_label('Nom','nom');
            echo form_input('nom', $produit->nomProd);
            echo '<br>';
            echo form_label('Description','desc');
            echo form_textarea('desc', $produit->descProd);
            echo '<br>';
            echo form_label('PUHT','prix');
            echo form_input('prix', $produit->PUHTProd);
            echo '<br>';
            echo form_label('Num catégorie','cat');
            echo form_input('cat', $produit->categProd);
            echo '<br>';
            echo form_label('<br>L\'image<br>', 'image');
            echo '<input type="file" name="image" size="50" />';
            echo '<br>';
            echo img('prod/'.$produit->refProd.'.jpg','height="150" width="150"');

            ?>


            <br/><br /><?php

            echo form_submit('valid','Valider');
        echo form_fieldset_close();
        echo form_close();
        ?>
    </p>
</article>
