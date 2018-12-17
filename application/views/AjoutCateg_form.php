<article>
    <p>
        <?php
        echo form_open('Categorie/Ajout');
        echo form_fieldset('Ajout d\'une catégorie');
            echo form_label('Libelé','lib');
            echo form_input('lib');
            echo '<br>';
            echo form_submit('valid','Valider');
        echo form_fieldset_close();
        echo form_close();                
        ?>
    </p>
</article>

