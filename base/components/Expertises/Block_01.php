<?php
function Expertises_block_01()
{
    require get_template_directory() . '/base/components/path.php';
    ?>
    <div id="Expertises_block_01" class=" container_boxed fl_col gp40">
        <div class="fl_col gp30 wrapper">
            <p class="p60 white w-900"><?php echo $GLOBALS['str_1']; ?> <span class="bleu"><u></u> </span><?php echo $GLOBALS['str_2']; ?><span class="bleu"><u> <?php echo $GLOBALS['str_3']; ?></u></span> ?</p>
            <p class="p18 white"><?php echo $GLOBALS['str_4']; ?>
        </p>
        </div>
        <div class="btn_light large_btn">
            <a href="#">
                <p class="p14 uper"><?php echo $GLOBALS['str_5']; ?></p>
            </a>
        </div>
    </div>
<?php
}

add_shortcode("Expertises_block_01", "Expertises_block_01");