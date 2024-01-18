<?php
function Home_block_02() {
    require get_template_directory() . '/base/components/path.php';
?>
<div id="Home_block_02" class="fl_row container_boxed gp40">
    <div class="left_block">
        <img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/earth.svg"; ?>">
    </div>
    <div class="right_block fl_col gp40">
        <div class="fl_col gp30">
            <p class="p60 white w-900 uper">
             <?php echo $GLOBALS['str_5']; ?> <span class="bleu"><u><?php echo $GLOBALS['str_6']; ?></u></span>
            </p>
            <p class="p18 white w-200">
            <?php echo $GLOBALS['str_7']; ?>
            </p>
        </div>
        <div class="btn_light large_btn">
            <a href="<?php echo $home . "incentive"; ?>">
                <p class="p14 uper"><?php echo $GLOBALS['str_8']; ?></p>
            </a>
        </div>
    </div>
</div>
<?php

}

add_shortcode("Home_block_02", "Home_block_02");
?>


