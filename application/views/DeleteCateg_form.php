<article>
    <?php
        $categs = Categorie::all();
        foreach ($categs as $categ) {
            echo $categ->idCateg." - ".$categ->libCateg."<br>";
        }
    ?>
    <p>
        <?php
        echo form_open('Cat/Enleve');
        echo form_fieldset('Supression d\'une catégorie');
            echo form_label('Numéro que vous voulez supprimé','id');
            echo form_input('id');
            echo '<br>';
            echo form_submit('valid','Valider');
        echo form_fieldset_close();
        echo form_close();                
        ?>
    </p>
</article>