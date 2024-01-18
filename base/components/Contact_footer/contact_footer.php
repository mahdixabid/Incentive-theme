<?php
function Contact_footer()
{
    require get_template_directory() . '/base/components/path.php';
    $language_segment = get_locale();
    $language_segment = substr($language_segment, 0, 2);
    if ($language_segment == 'fr') {
        $GLOBALS['contact_footer_str_1'] = "Vous Avez";
        $GLOBALS['contact_footer_str_2'] = "des questions";
        $GLOBALS['contact_footer_str_3'] = "Ou";
        $GLOBALS['contact_footer_str_4'] = "un projet ?";
        $GLOBALS['contact_footer_str_5'] = "n’hésitez pas à nous contacter";
    } else {
        $GLOBALS['contact_footer_str_1'] = "Do you have";
        $GLOBALS['contact_footer_str_2'] = "questions?";
        $GLOBALS['contact_footer_str_3'] = "Or";
        $GLOBALS['contact_footer_str_4'] = "a project?";
        $GLOBALS['contact_footer_str_5'] = "feel free to contact us";

    }
    ?>
    <div id="Contact_footer" class=" container_boxed fl_col gp20">
        <p class="p60 white w-900"><?php echo $GLOBALS['contact_footer_str_1']; ?> <span class="bleu uper"><?php echo $GLOBALS['contact_footer_str_2']; ?></span> <?php echo $GLOBALS['contact_footer_str_3']; ?> <span class="bleu uper"><?php echo $GLOBALS['contact_footer_str_4']; ?></span></p>
        <div class="wrapper fl_row">
            <div class="form_section fl_col gp70">
                <p class="p21 white uper">
                    <?php echo $GLOBALS['contact_footer_str_5']; ?>
                </p>
                <div class="form">
                    <?php echo FrmFormsController::get_form_shortcode(array('id' => 1)); ?>
                </div>
            </div>
            <div class="telegram_element">
                <?php echo do_shortcode('[telegram]'); ?>
            </div>
        </div>
    </div>
<?php
}

add_shortcode("Contact_footer", "Contact_footer");