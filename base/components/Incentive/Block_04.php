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
                Chez Incentive Solutions nous croyons en l'approche agile. D’ailleurs, nous encourageons la collaboration et l'implication de nos clients dans le processus de développement, afin de mieux comprendre leurs besoins et leurs attentes. Ensemble, nous créons des solutions web performantes et innovantes.
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