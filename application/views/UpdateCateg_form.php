<article>
    <?php
        $categs = Categorie::all();
        foreach ($categs as $categ) {
            echo $categ->idCateg." - ".$categ->libCateg."<br>";
        }
    ?>
    <p>
        <?php
        echo form_open('Categorie/Modif');
        echo form_fieldset('Modification d\'une catégorie');
            echo form_label('Numéro que vous voulez modifié','id');
            echo form_input('id');
            echo '<br>';
            echo form_label('Nouveau libelé','lib');
            echo form_input('lib');
            echo '<br>';
            echo form_submit('valid','Valider');
        echo form_fieldset_close();
        echo form_close();                
        ?>
    </p>
</article>