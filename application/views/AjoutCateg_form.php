<article>
    <p>
        <?php
        echo form_open('Cat/Ajout');
        echo form_fieldset('Ajout d\'une catégorie');
            echo form_label('Libellé','lib');
            echo form_input('lib');
            echo '<br>';
            echo form_submit('valid','Valider');
        echo form_fieldset_close();
        echo form_close();                
        ?>
    </p>
</article>

