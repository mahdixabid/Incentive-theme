<?php
function Home_block_03() {
    require get_template_directory() . '/base/components/path.php';
?>
<div id="Home_block_03" class="fl_row container_boxed gp40">
    <div class="fl_col">
        <p class="w-900 bleu p60">+32</p>
        <p class="w-900 white p36">  <?php echo $GLOBALS['str_9']; ?></p>
    </div>
    <div class="fl_col">
        <p class="w-900 bleu p60">+24</p>
        <p class="w-900 white p36"> <?php echo $GLOBALS['str_10']; ?></p>
    </div>
    <div class="fl_col">
        <p class="w-900 bleu p60">+25</p>
        <p class="w-900 white p36"> <?php echo $GLOBALS['str_11']; ?></p>
    </div>
</div>
<?php

}

add_shortcode("Home_block_03", "Home_block_03");
?>
