<nav>
    <ul id="menu" class="topmenu">
        <li class="topfirst"><?php echo anchor(current_url(),img('stock.png').' Gestion du stock','style="height:18px;line-height:18px;"') ?>                    
            <ul>
            <li><a href="Stock/EntreeDeStock">Saisir une entrée en stock</a></li>
            <li><a href="Stock/SortieDeStock">Saisir une sortie de stock</a></li>
            <li><a href="Stock/AccesStat">Statistiques</a></li>
            </ul>
        </li>				
        <li class="topmenu"><?php echo anchor(current_url(),img('prod.png').' Produits','style="height:18px;line-height:18px;"') ?>
            <ul>
            <li><a href="Prod/Add">Nouveau produit disponible</a></li>
            <li><a href="Prod/Update">Modifier un produit</a></li>
            <li><a href="Prod/Delete">Retirer un produit de la vente</a></li>
            </ul>
        </li>
        <li class="topmenu"><?php echo anchor(current_url(),img('categ.png').' Catégories','style="height:18px;line-height:18px;"') ?>
            <ul>
            <li><a href="Cat/Add">Ajouter</a></li>
            <li><a href="Cat/Update">Modifier</a></li>
            <li><a href="Cat/Delete">Supprimer</a></li>
            </ul>
        </li>
        <li class="toplast">
            <?php echo anchor('login/disconnect',img('switch.png').' Déconnecter','style="height:18px;line-height:18px;"') ?>                    
        </li>
    </ul>			
</nav>
