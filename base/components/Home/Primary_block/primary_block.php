<?php
function Primary_block() {
    require get_template_directory() . '/base/components/path.php';
?>
<div id="Primary_block" class="fl_row container_boxed">
    <div class="content_block ">
        <p class="p18 bleu">
         <?php echo $GLOBALS['str_1']; ?>
        </p>
        <div class="fl_col gp30">
            <p class="p60 white"><b><?php echo $GLOBALS['str_2']; ?></b></p>
            <p class="p18 white w-300"><?php echo $GLOBALS['str_3']; ?></p>
            <div class="btn_light large_btn">
                <a href="<?php echo $home . "/contact_us"; ?>"><p class="p14 uper"><?php echo $GLOBALS['str_4']; ?></p></a>
            </div>
        </div>
    </div>
    <div class="shape_block">
        <img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/hand_tech.png"; ?>">
    </div>
</div>
<?php


}

add_shortcode("Primary_block", "Primary_block");
?>



