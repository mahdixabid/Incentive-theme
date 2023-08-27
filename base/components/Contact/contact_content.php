<?php
function contact_content()
{
    require get_template_directory() . '/base/components/path.php';
?>

<div id="contact_page" class="container_boxed">
    <div class="top_contact fl_row pd40-t-b gp70">
        <div class="block_text fl_col gp20">
            <p class="p60 w-900  white">Vous Avez <span class="bleu uper">des questions</span> Ou <span class="bleu uper">un projet</span> ?</p>
            <p class="p21 white uper">n’hésitez pas à nous contacter</p>
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