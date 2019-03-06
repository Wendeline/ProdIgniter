
<?php

  $this->load->view('common/script_end_body');

?>

<footer class="page-footer">
    <div class="footerDiv">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class=""><a href="https://www.asheart.fr" target="_blank">Asheart.fr</a></h5>
                    <?php if ($lang == 'fr'): ?>
                        <p class="grey-text text-lighten-4"></p>
                    <?php else: ?>
                        <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job.
                            Any amount would help support and continue development on this project and is greatly appreciated.</p>
                    <?php endif; ?>

                </div>

                <div class="col offset-l3 l3 s12">
                    <h5 class="white-text">Connect</h5>
                    <ul>
                        <li><a class="white-text" href="<?php echo base_url('Admin');?>">Admin</a></li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="container">
                Based on <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a> | <a href="https://www.asheart.fr" target="_blank">Create by Asheart</a>
            </div>
        </div>
    </div>
</footer>
