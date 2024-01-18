<?php
function contact_content()
{
    require get_template_directory() . '/base/components/path.php';
    $language_segment = get_locale();
    $language_segment = substr($language_segment, 0, 2);
    if ($language_segment == 'fr') {
        $GLOBALS['contact_content_str_1'] = "Vous Avez";
        $GLOBALS['contact_content_str_2'] = "des questions";
        $GLOBALS['contact_content_str_3'] = "Ou";
        $GLOBALS['contact_content_str_4'] = "un projet ?";
        $GLOBALS['contact_content_str_5'] = "n’hésitez pas à nous contacter";
    } else {
        $GLOBALS['contact_content_str_1'] = "Do you have";
        $GLOBALS['contact_content_str_2'] = "questions?";
        $GLOBALS['contact_content_str_3'] = "Or";
        $GLOBALS['contact_content_str_4'] = "a project?";
        $GLOBALS['contact_content_str_5'] = "feel free to contact us";

    }
?>

<div id="contact_page" class="container_boxed">
    <div class="top_contact fl_row pd40-t-b gp70">
        <div class="block_text fl_col gp20">
        <p class="p60 white w-900"><?php echo $GLOBALS['contact_content_str_1']; ?> <span class="bleu uper"><?php echo $GLOBALS['contact_content_str_2']; ?></span> <?php echo $GLOBALS['contact_content_str_3']; ?> <span class="bleu uper"><?php echo $GLOBALS['contact_content_str_4']; ?></span></p>
        </div>
        <div class="block_element ">
            <?php echo do_shortcode( '[telegram]' ); ?>
        </div>
    </div>

    <div class="contact_form fl_row gp40 pd40-t-b">
        <div class="left_block">
        <img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/contact_img.png"; ?>">
        </div>
        <div class="right_block form">
        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 3 ) ); ?>
        </div>
    </div>
</div>

<?php
}

add_shortcode("contact_content", "contact_content");

?>