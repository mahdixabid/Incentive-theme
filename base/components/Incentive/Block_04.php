<?php
function Incentive_block_04()
{
    require get_template_directory() . '/base/components/path.php';
    ?>
    <div id="Incentive_block_04" class=" container_boxed fl_col gp40">
        <div class="wrapper fl_col gp40">
            <div class="block_header fl_col gp30">
                <p class="p60 white w-900">Notre <br> <span class="bleu uper"><u>METHODOLOGIE</u></span></p>
                <p class="p18 white w-300">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec felis gravida, efficitur felis id, feugiat velit. Fusce bibendum, ex et tincidunt volutpat, magna enim vestibulum massa, at semper velit dui sed nulla. Aliquam a mauris velit. Ut in risus dolor. Donec sollicitudin ullamcorper neque, vitae ornare nisl ornare vel. Curabitur sed est leo.
                </p>
            </div>
            <div class="schema fl_col gp40">
                <div class="schema_header center fl_col gp5">
                    <p class="p18 bleu w-300 uper">Résumé et schéma</p>
                    <p class="p32 white w-900">La Méthodologie Agile</p>
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