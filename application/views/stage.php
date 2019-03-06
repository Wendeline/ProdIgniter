<div id="Stage">
    <?php foreach (Stage::orderBy('du', 'desc')->get() as $stage):
        $order   = array("\r\n", "\n", "\r");
        $replace = '<br />';
    ?>
        <div class="row projetsBackground">
            <div class="col m5 s12 projetsBorder">
                <div class="row projetsSlash">
                    <div class="col s12">
                        <h1 class="right h1Stage"><?php echo $stage->titre; ?></h1>
                        <div class="right">
                            <div class="dateD"><?php echo $stage->localisation; ?> : <?php echo $stage->du; ?> | <?php echo $stage->au; ?></div>
                            <div class="chip"><a target="_blank" href="<?php echo $stage->link ?>"><?php echo $stage->entreprise; ?></a></div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col m7 s12 projetsBorderPAD">
                <div class="col s12 ">
                    <?php if ($stage->FDP != null || $stage->INF != null): ?>
                        <ul class="collapsible">
                            <?php if ($stage->FDP != null): ?>
                                <li class="active">
                                    <div class="collapsible-header">
                                        <i class="material-icons">filter_drama</i>
                                        <?php if ($lang == "fr"): ?>
                                            Fiche de poste
                                        <?php else: ?>
                                            Job description
                                        <?php endif; ?>
                                    </div>
                                    <div class="collapsible-body">
                                        <span>
                                            <?php
                                                if ($lang == "fr") {
                                                    echo str_replace($order, $replace,$stage->FDP);
                                                } else {
                                                    echo str_replace($order, $replace,$stage->FDP_EN);
                                                }
                                            ?>
                                        </span>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php if ($stage->INF != null): ?>
                                <li>
                                    <div class="collapsible-header">
                                        <i class="material-icons">filter_drama</i>
                                        <?php if ($lang == "fr"): ?>
                                            Information / Complement / Travaux
                                        <?php else: ?>
                                            Information / Complement / Work
                                        <?php endif; ?>
                                    </div>
                                    <div class="collapsible-body">
                                        <span>
                                            <?php
                                                if ($lang == "fr") {
                                                    echo str_replace($order, $replace,$stage->INF);
                                                } else {
                                                    echo str_replace($order, $replace,$stage->INF_EN);
                                                }
                                            ?>
                                        </span>
                                    </div>
                                </li>
                            <?php endif; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
