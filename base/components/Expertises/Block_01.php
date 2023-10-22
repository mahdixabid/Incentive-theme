<?php
function Expertises_block_01()
{
    require get_template_directory() . '/base/components/path.php';
    ?>
    <div id="Expertises_block_01" class=" container_boxed fl_col gp40">
        <div class="fl_col gp30 wrapper">
            <p class="p60 white w-900">Avec Incentive <span class="bleu"><u>,</u> </span>votre<span class="bleu"><u> vision devient réalité !</u></span> ?</p>
            <p class="p18 white">Chez Incentive, nous croyons en la puissance de la créativité et de l'innovation. D’ailleurs, pour poser les socles d’un branding durable et de qualité, notre équipe passionnée repousse les limites pour créer des solutions uniques et révolutionnaires qui vous aideront à vous démarquer de la concurrence. <br>
            
            Nous ne nous contentons pas d’appliquer les mêmes recettes. Au contraire, nous travaillons en étroite collaboration avec vous pour comprendre votre vision, vos objectifs et votre identité. Ensuite, nous donnons vie à votre projet en ajoutant notre touche magique.
        </p>
        </div>
        <div class="btn_light large_btn">
            <a href="#">
                <p class="p14 uper">DECOUVRIR INCENTIVE SOLUTIONS</p>
            </a>
        </div>
    </div>
<?php
}

add_shortcode("Expertises_block_01", "Expertises_block_01");