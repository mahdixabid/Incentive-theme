<?php
function Home_block_03() {
    require get_template_directory() . '/base/components/path.php';
?>
<div id="Home_block_03" class="fl_row container_boxed gp40">
    <div class="fl_col">
        <p class="w-900 white p36">Lorem</p>
        <p class="w-900 bleu p60">100+</p>
        <p class="w-900 white p36">Lorem Ipsum</p>
    </div>
    <div class="fl_col">
        <p class="w-900 bleu p60">10</p>
        <p class="w-900 white p36">Lorem Ipsum Dolor Sit Amet</p>
    </div>
    <div class="fl_col">
        <p class="w-900 bleu p60">50</p>
        <p class="w-900 white p36">Lorem Ipsum Dolor Sit </p>
    </div>
</div>
<?php

}

add_shortcode("Home_block_03", "Home_block_03");
?>
