<?php
function Home_block_04() {
    require get_template_directory() . '/base/components/path.php';
?>
<div id="Home_block_04" class="fl_row container_boxed gp40">
    <div class="left_block">
        <p class="p60 w-700 white">
         <?php echo $GLOBALS['str_12']; ?> <span class="bleu"> <u> <?php echo $GLOBALS['str_13']; ?></u> </span>
        </p>
    </div>
    <div class="right_block">
        <p class="p18 w-200 white"> <?php echo $GLOBALS['str_14']; ?></p>
    </div>
</div>
<?php

}

add_shortcode("Home_block_04", "Home_block_04");
?>
