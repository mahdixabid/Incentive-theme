<?php
function Contact_footer()
{
    require get_template_directory() . '/base/components/path.php';
    ?>
    <div id="Contact_footer" class=" container_boxed fl_col gp20">
        <p class="p60 white w-900">Vous Avez <span class="bleu uper">des questions</span> Ou <span class="bleu uper">un projet ?</span></p>
        <div class="wrapper fl_row">
            <div class="form_section fl_col gp70">
                <p class="p21 white uper">
                    n’hésitez pas à nous contacter
                </p>
                <div class="form">
                    <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1 ) ); ?>
                </div>
            </div>
            <div class="telegram_element">
                <?php echo do_shortcode( '[telegram]' ); ?>
            </div>
        </div>
    </div>
<?php
}

add_shortcode("Contact_footer", "Contact_footer");