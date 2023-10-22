<?php
function Incentive_block_01()
{
    require get_template_directory() . '/base/components/path.php';
    ?>
    <div id="Incentive_block_01" class=" container_boxed fl_col gp40">
        <div class="wrapper fl_row">
            <div class="left_block fl_col gp30">
                <p class="p60 white uper w-900"> UN PARTENAIRE <u class="bleu">technologique</u> !</p>
                <p class="p18 white">
                Partenaire technologique stratégique. Nous sommes des experts en technologies innovantes. Nous vous offrons la meilleure solution grâce à notre expertise métier,  à notre maîtrise des dernières technologies et des meilleures pratiques en marketing pour booster le business de votre marque.
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