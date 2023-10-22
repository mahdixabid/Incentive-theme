<?php
function Home_block_02() {
    require get_template_directory() . '/base/components/path.php';
?>
<div id="Home_block_02" class="fl_row container_boxed gp40">
    <div class="left_block">
        <img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/earth.svg"; ?>">
    </div>
    <div class="right_block fl_col gp40">
        <div class="fl_col gp30">
            <p class="p60 white w-900 uper">
            VOUS AVEZ UN PROJET ? <span class="bleu"><u>NOUS AVONS LA SOLUTION !</u></span>
            </p>
            <p class="p18 white w-200">
            Découvrez nos solutions sur mesure pour propulser votre présence en ligne et booster votre activité ! Quelle que soit la taille de votre entreprise et son secteur d’activité, nous savons que votre notoriété, votre développement commercial et vos ventes dépendent fortement de votre présence en ligne.
            C’est pourquoi nous avons la responsabilité de comprendre rapidement vos défis et de répondre concrètement avec un dispositif sur mesure basé sur notre expérience.

            </p>
        </div>
        <div class="btn_light large_btn">
            <a href="<?php echo $home . "incentive"; ?>">
                <p class="p14 uper">DECOUVRIR INCENTIVE SOLUTIONS</p>
            </a>
        </div>
    </div>
</div>
<?php

}

add_shortcode("Home_block_02", "Home_block_02");
?>
