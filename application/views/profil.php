<div class="bg1" id='BARE'>
    <div class="noMargeBottom noMargeTop row">
        <!-- <div class="col s3 imgParfaite" style=" background:url('<?php echo img_url('ME.jpg');?>')">
        </div> -->
        <div class="container">
            <?php if ($lang == "fr"): ?>
                <h3 class="left" style="font-size:2vw; position: relative; top: -3vw;">
                    Dévellopeur Web / WebDesigner / Graphiste
                </h3>
            <?php else: ?>
                <h3 class="left" style="font-size:2vw; position: relative; top: -3vw;">
                    Web Developer / WebDesigner / Graphic Designer
                </h3>
            <?php endif; ?>

        </div>
        <div class="container">
            <div class="row">
                <div class="col s9">
                    <div class="row">
                        <?php if ($lang == "fr"): ?>
                            <h5>Moi</h5>
                            <p>Etudiant en Dévellopement informatique, Auto-entrepreneur en Communication Print et Web.</p>
                            <p>Passionner d'art, de bande dessiner, et d'humour noir</p>
                        <?php else: ?>
                            <h5>My</h5>
                            <p> Student in Computer Development, Auto-Entrepreneur in Print and Web Communication.</p>
                            <p> Passion for art, comics, and black humor </p>
                        <?php endif; ?>
                    </div>
                    <div class="row">
                        <?php
                            $comps = Competences::where('diagram', 1)->orderBy('pourcentage', 'desc')->get();

                            echo "<table id='Epilepsi'>";
                            foreach ($comps as $comp) {
                                echo '<tr>';
                                    echo '<td><i class="'. $comp->devicon .'" style="color:#fff;font-size:2vw"></i></td>';
                                    echo "<td>". $comp->lib . '</td>';
                                    $prs = ($comp->pourcentage / 100) * 40;
                                    echo '<td>'. $comp->pourcentage.' %</td>';
                                    echo "<td>". '<div style="width:'. $prs .'vw"><div class="barreComp"></div></div>' . '</td>';
                                echo '</tr>';
                            }
                            echo '</table>';
                        ?>
                    </div>
                </div>
                <div class="col s3">
                    <div class="row">
                        <div class="col s6">
                            <?php if ($lang == "fr"): ?>
                                <h5>Mes Liens</h5>
                            <?php else: ?>
                                <h5>My Links</h5>
                            <?php endif; ?>
                            <?php
                                $links = Link::all();

                                echo '<ul>';
                                    foreach ($links as $link) {
                                        echo '<li>'. '<a target="_blank" href="'. $link->link .'">'. $link->icon .' '. $link->nom . '</a>' . '<li>';
                                    }
                                echo '</ul>';
                            ?>
                        </div>
                        <div class="col s6">
                            <?php if ($lang == "fr"): ?>
                                <h5>Mes Sites</h5>
                            <?php else: ?>
                                <h5>My WebSites</h5>
                            <?php endif; ?>
                            <?php
                                $links = Site::all();

                                echo '<ul>';
                                    foreach ($links as $link) {
                                        echo '<li>'. '<a target="_blank" href="'. $link->link .'">'. $link->nom . '</a>' . '<li>';
                                    }
                                echo '</ul>';
                            ?>
                        </div>

                    </div>

                    <div class="row">
                        <?php if ($lang == "fr"): ?>
                            <h5>Mes Competences</h5>
                        <?php else: ?>
                            <h5>My Skills</h5>
                        <?php endif; ?>
                        <div id="icons" class="devicon">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
    var icons = [ <?php
                    $comps = Competences::all();
                    foreach ($comps as $key => $comp) {
                            echo '\'<div class="col s4 tooltipped white-text center" data-position="bottom" data-tooltip="'. $comp->lib .'"><i class="'. $comp->devicon .' scale-transition" style="color:#fff;font-size:3vw;"></i><br>'. $comp->lib .'</div>\',';
                    }
                  ?>];

    var iIcon = 0;

    function iconSwitch() {
        iIcon = (iIcon   == icons.length-1 ) ? 0                   : iIcon+1;
        x     = (iIcon   == 0              ) ? icons.length - 1    : iIcon-1;
        y     = (iIcon+1 == icons.length   ) ? 0                   : iIcon+1;
        document.getElementById('icons').innerHTML = icons[x] + icons[iIcon] + icons[y];
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.tooltipped');
            var instances = M.Tooltip.init(elems);
        });
    }

    iconPulse = setInterval(iconSwitch, 3500)
</script>
