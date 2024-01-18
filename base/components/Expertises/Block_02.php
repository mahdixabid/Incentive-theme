<?php
function Expertises_block_02()
{
    require get_template_directory() . '/base/components/path.php';
    ?>
    <div id="Expertises_block_02" class=" container_boxed">
        <div class="wrapper fl_row">
            <p class="p60 white w-900"><?php echo $GLOBALS['str_6']; ?><span class="bleu"><u> <?php echo $GLOBALS['str_7']; ?></u></span></p>
            <p class="p18 white">
            <?php echo $GLOBALS['str_8']; ?> 
            </p>
        </div>
    </div>
<?php
}

add_shortcode("Expertises_block_02", "Expertises_block_02");