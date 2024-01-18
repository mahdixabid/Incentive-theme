<?php
function Incentive_block_04()
{
    require get_template_directory() . '/base/components/path.php';
    ?>
    <div id="Incentive_block_04" class=" container_boxed fl_col gp40">
        <div class="wrapper fl_col gp40">
            <div class="block_header fl_col gp30">
                <p class="p60 white w-900"><?php echo $GLOBALS['str_16']; ?> <br> <span class="bleu uper"><u><?php echo $GLOBALS['str_17']; ?></u></span></p>
                <p class="p18 white w-300">
                <?php echo $GLOBALS['str_18']; ?>
                </p>
            </div>
            <div class="schema fl_col gp40">
                <div class="schema_header center fl_col gp5">
                    <p class="p18 bleu w-300 uper"><?php echo $GLOBALS['str_19']; ?></p>
                    <p class="p32 white w-900"><?php echo $GLOBALS['str_20']; ?></p>
                </div>
                <div class="schema_img desktop_schema">
                    <img class="close_btn" src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/Méthodologie_schéma.svg"; ?>">
                </div>
                <div class="schema_img desktop_mobile">
                    <img class="close_btn" src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/Méthodologie_schéma_mobile.svg"; ?>">
                </div>
            </div>
        </div>
    </div>
<?php
}

add_shortcode("Incentive_block_04", "Incentive_block_04");