<?php
function Home_block_04() {
    require get_template_directory() . '/base/components/path.php';
?>
<div id="Home_block_04" class="fl_row container_boxed gp40">
    <div class="left_block">
        <p class="p60 w-700 white">
        Découvrez nos <span class="bleu"> <u>expertises</u> </span>
        </p>
    </div>
    <div class="right_block">
        <p class="p18 w-200 white">Chez Incentive solutions, nous gérons l’ensemble des prestations digitales. De la création de sites web et d’e-commerce à la conception d’applications mobiles, nous mettons l’accent sur l’UX/UI design, le référencement SEO/SEA, la gestion des réseaux sociaux, l’externalisation des projets IT et bien plus. Notre objectif est de donner vie à vos projets avec passion, expertise et créativité afin de concrétiser vos idées les plus audacieuses.
 </p>
    </div>
</div>
<?php

}

add_shortcode("Home_block_04", "Home_block_04");
?>
