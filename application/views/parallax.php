<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="white-text header center text-lighten-2"><i class="fas fa-terminal"></i> Portfolio</h1>

            <div class="row center">
                <h5 class="white-text"><?php echo $a = ($lang == "fr")
                                                         ? 'Ce site comprend :'
                                                         : 'This site includes :' ; ?>
                  <span
                     class="txt-rotate"
                     data-period="3500"
                     data-rotate='<?php echo $a = ($lang == "fr")
                                                ? '[ "mes Stages", "des Projets", "mon Experience", "ect..." ]'
                                                : '[ "my TrainingPeriod", "my Project", "my Experience", "ect..." ]';?>'></span>
                </h5>
            </div>

        <div class="row center">
            <a href="#start" id="download-button" class="btn-large waves-effect waves-light teal lighten-1 js-scrollTo">Do it</a>
        </div>
        <br><br>
    </div>
</div>

<div class="parallax"><img src="<?php echo img_url('bg1.jpg') ?>" alt="Unsplashed background img 1"></div>
</div>
