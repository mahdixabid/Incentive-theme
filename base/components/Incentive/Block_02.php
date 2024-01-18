<?php
function Incentive_block_02()
{
    require get_template_directory() . '/base/components/path.php';
    ?>
    <div id="Incentive_block_02" class=" container_boxed fl_col gp40">
    <div class="wrapper fl_row">
        <div class="left_block fl_row">
            <p class="p60 white uper w-900">  <?php echo $GLOBALS['str_4']; ?> <span class="bleu"> <u> <?php echo $GLOBALS['str_5']; ?></u></span> </p>
            <img class="toggle_btn" src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/lines_circle.svg"?>">
        </div>
        <div class="right_block fl_col">
            <div class="list_item fl_row gp40">
                <div class="number"><p class="p18 white w-900 pd10-r-l pd10-t-b">01</p></div>
                <div class="list_text fl_col gp10">
                    <p class="p32 white uper w-900"> <?php echo $GLOBALS['str_6']; ?></p>
                    <p class="p18 white"> <?php echo $GLOBALS['str_7']; ?>

                    </p>
                </div>
            </div>
            <div class="list_item fl_row gp40">
                <div class="number"><p class="p18 white w-900 pd10-r-l pd10-t-b">02</p></div>
                <div class="list_text fl_col gp10">
                    <p class="p32 white uper w-900"> <?php echo $GLOBALS['str_8']; ?></p>
                    <p class="p18 white"> <?php echo $GLOBALS['str_9']; ?>
                </p>
                </div>
            </div>
            <div class="list_item fl_row gp40">
                <div class="number"><p class="p18 white w-900 pd10-r-l pd10-t-b">03</p></div>
                <div class="list_text fl_col gp10">
                    <p class="p32 white uper w-900"> <?php echo $GLOBALS['str_10']; ?></p>
                    <p class="p18 white"> <?php echo $GLOBALS['str_11']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php
}

add_shortcode("Incentive_block_02", "Incentive_block_02");