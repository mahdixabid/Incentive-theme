<?php
function Incentive_block_02()
{
    require get_template_directory() . '/base/components/path.php';
    ?>
    <div id="Incentive_block_02" class=" container_boxed fl_col gp40">
    <div class="wrapper fl_row">
        <div class="left_block fl_row">
            <p class="p60 white uper w-900">NOS <span class="bleu"><u>valeurs</u></span></p>
            <img class="toggle_btn" src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/lines_circle.svg"?>">
        </div>
        <div class="right_block fl_col">.
            <div class="list_item fl_row gp40">
                <div class="number"><p class="p18 white w-900 pd10-r-l pd10-t-b">01</p></div>
                <div class="list_text fl_col gp10">
                    <p class="p32 white uper w-900">ACCOMPAGNEMENT</p>
                    <p class="p18 white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit massa, commodo non turpis eget, tincidunt porta odio. Nam a eros et nisl fringilla accumsan   quis vitae enim.
                    </p>
                </div>
            </div>
            <div class="list_item fl_row gp40">
                <div class="number"><p class="p18 white w-900 pd10-r-l pd10-t-b">02</p></div>
                <div class="list_text fl_col gp10">
                    <p class="p32 white uper w-900">CONSEIL</p>
                    <p class="p18 white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit massa, commodo non turpis eget, tincidunt porta odio.
                    </p>
                </div>
            </div>
            <div class="list_item fl_row gp40">
                <div class="number"><p class="p18 white w-900 pd10-r-l pd10-t-b">03</p></div>
                <div class="list_text fl_col gp10">
                    <p class="p32 white uper w-900">EFFICACITE</p>
                    <p class="p18 white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit massa, commodo non turpis eget, tincidunt porta odio. Nam a eros et nisl fringilla accumsan   quis vitae enim. Curabitur sed condimentum lacus.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php
}

add_shortcode("Incentive_block_02", "Incentive_block_02");