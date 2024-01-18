<?php
function Incentive_block_01()
{
    require get_template_directory() . '/base/components/path.php';
    ?>
    <div id="Incentive_block_01" class=" container_boxed fl_col gp40">
        <div class="wrapper fl_row">
            <div class="left_block fl_col gp30">
                <p class="p60 white uper w-900"><?php echo $GLOBALS['str_1']; ?>  <u class="bleu"> <?php echo $GLOBALS['str_2']; ?></u> !</p>
                <p class="p18 white">
                <?php echo $GLOBALS['str_3']; ?>
                </p>
            </div>
            <div class="right_block">
                <img class="close_btn" src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/UN PARTENAIRE_technologique !.png"; ?>">
            </div>
        </div>
    </div>
<?php
}

add_shortcode("Incentive_block_01", "Incentive_block_01");