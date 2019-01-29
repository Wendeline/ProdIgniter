<article>
  <?php
      echo '<table class="tableau_bleu">';
          echo '<thead>
                    <tr>
                        <th>Produit</th>
                        <th>Prix du stock</th>
                    </tr>
                </thead>
                <tbody>';
                    foreach ($categs as $categ) {
                        echo '<tr>
                                <td>';
                                  echo form_open('Cat/Modif/'. $categ->idCateg);
                                      echo form_input('lib', $categ->libCateg, 'style="width: 70% !important;"');
                                      echo form_submit('valid','Modifier', 'style="margin-left:5px"');
                                  echo form_close();
                        echo   '</td>
                                <td>
                                  <a href="'. base_url('Cat/Enleve/'. $categ->idCateg) .'">Delete</a>
                                </td>
                              <tr>';
                        $price = 0;
                    }
        echo " </tbody>
      </table>";
  ?>
  <br>
