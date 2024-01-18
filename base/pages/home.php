<?php
function home_page()
{
    $language_segment = get_locale();
    $language_segment = substr($language_segment, 0, 2);
    if ($language_segment == 'fr') {
    $GLOBALS['str_1'] = "CREATIVE MIND, CREATIVE WORKS.";
    $GLOBALS['str_2'] = "Agence de développement web";
    $GLOBALS['str_3'] = "Experts en développement web et projet digital, nous proposons à nos clients des solutions innovantes sur-mesure pour une présence en ligne percutante.";
    $GLOBALS['str_4'] = "En savoir plus";
    $GLOBALS['str_5'] = "VOUS AVEZ UN PROJET ?";
    $GLOBALS['str_6'] = "NOUS AVONS LA SOLUTION ! ";
    $GLOBALS['str_7'] = "Découvrez nos solutions sur mesure pour propulser votre présence en ligne et booster votre activité ! Quelle que soit la taille de votre entreprise et son secteur d’activité, nous savons que votre notoriété, votre développement commercial et vos ventes dépendent fortement de votre présence en ligne. C’est pourquoi nous avons la responsabilité de comprendre rapidement vos défis et de répondre concrètement avec un dispositif sur mesure basé sur notre expérience.";
    $GLOBALS['str_8'] = "DECOUVRIR INCENTIVE SOLUTIONS";
    $GLOBALS['str_9'] = "Clients satisfaits";
    $GLOBALS['str_10'] = "Projets réalisés";
    $GLOBALS['str_11'] = "Talents";
    $GLOBALS['str_12'] = "Découvrez nos";
    $GLOBALS['str_13'] = "expertises";
    $GLOBALS['str_14'] = "Chez Incentive solutions, nous gérons l’ensemble des prestations digitales. De la création de sites web et d’e-commerce à la conception d’applications mobiles, nous mettons l’accent sur l’UX/UI design, le référencement SEO/SEA, la gestion des réseaux sociaux, l’externalisation des projets IT et bien plus. Notre objectif est de donner vie à vos projets avec passion, expertise et créativité afin de concrétiser vos idées les plus audacieuses.";
    $GLOBALS['str_15'] = "Ils Nous Font";
    $GLOBALS['str_16'] = "confiance";
    } else {
    $GLOBALS['str_1'] = "CREATIVE MIND, CREATIVE WORKS.";
    $GLOBALS['str_2'] = "Web development agency";
    $GLOBALS['str_3'] = "Experts in web development and digital projects, we offer our clients innovative tailor-made solutions for a powerful online presence.";
    $GLOBALS['str_4'] = "Learn more";
    $GLOBALS['str_5'] = "DO YOU HAVE A PROJECT?";
    $GLOBALS['str_6'] = "WE HAVE THE SOLUTION!";
    $GLOBALS['str_7'] = "Discover our tailor-made solutions to boost your online presence and enhance your business! Regardless of the size and sector of your company, we understand that your reputation, business development, and sales depend heavily on your online presence. That's why we have the responsibility to quickly grasp your challenges and provide concrete solutions based on our experience.";
    $GLOBALS['str_8'] = "DISCOVER INCENTIVE SOLUTIONS";
    $GLOBALS['str_9'] = "Satisfied clients";
    $GLOBALS['str_10'] = "Projects completed";
    $GLOBALS['str_11'] = "Talents";
    $GLOBALS['str_12'] = "Discover our";
    $GLOBALS['str_13'] = "expertise";
    $GLOBALS['str_14'] = "At Incentive Solutions, we manage all digital services. From creating websites and e-commerce to designing mobile applications, we focus on UX/UI design, SEO/SEA optimization, social media management, IT project outsourcing, and much more. Our goal is to bring your projects to life with passion, expertise, and creativity to realize your boldest ideas.";
    $GLOBALS['str_15'] = "They Trust";
    $GLOBALS['str_16'] = "us"; }
  echo '<div id="container" class="home_page ">';
    echo do_shortcode( '[Primary_block]' );
    echo do_shortcode( '[Home_block_02]' );
    echo do_shortcode( '[Home_block_03]' );
    echo do_shortcode( '[Home_block_04]' );
    echo do_shortcode( '[Home_block_05]' );
    echo do_shortcode( '[Home_block_06]' );
    echo do_shortcode( '[Home_block_07]' );
    echo do_shortcode( '[Prefooter]' );
  echo '</div>';
}

add_shortcode("home_page", "home_page");

?>