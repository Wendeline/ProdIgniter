<div id="Graphisme">
    <div class="row projetsBackground">
    <?php
        $lastCat = "";
        foreach (Photos::where('idA', null)->orderby('cat')->get() as $key => $photo) :
            if ($photo->cat != $lastCat) {
                $lastCat = $photo->cat;
                echo ($key != 0)?'</div>':'';
                echo '<div class="row">';
                    echo '<div class="col s12"><h3>'. $photo->cat .'</h3></div>';
            }
    ?>

                    <div class="col s4 grafImg materialboxed" style="background:url('<?php echo img_url($photo->img );?>')">
                        <h6 class="HGraphiste"><?php echo $photo->titre ?></h6>
                    </div>
    <?php
        endforeach;
    ?>
        </div>
    </div>
</div>
