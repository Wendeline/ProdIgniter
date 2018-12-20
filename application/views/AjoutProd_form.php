<article>
    <p>
        <?php
        echo form_open('Prod/Ajout');
        echo form_fieldset('Ajout d\'un produit');
            echo form_label('Référence','ref');
            echo form_input('ref');
            echo '<br>';
            echo form_label('Nom','nom');
            echo form_input('nom');
            echo '<br>';
            echo form_label('Description','desc');
            echo form_input('desc');
            echo '<br>';
            echo form_label('PUHT','prix');
            echo form_input('prix');
            echo '<br>';
            echo form_label('Num catégorie','cat');
            echo form_input('cat');
            echo '<br>';
            
            echo '<br>L\'image doit avoir pour nom la référence du produit.<br>';
            //echo "<input type='file' name='img'/><br/>";
            
            echo form_open_multipart('upload/do_upload');?>

            <input type="file" name="img" size="50" />

            <br/><br /><?php
            
            echo form_submit('valid','Valider');
        echo form_fieldset_close();
        echo form_close();                
        ?>
    </p>
</article>

