<?php
function Expertises_page()
{
    require get_template_directory() . '/base/components/path.php';
    $GLOBALS['header_img'] = "experise_img.jpg";

    $language_segment = get_locale();
    $language_segment = substr($language_segment, 0, 2);
    $GLOBALS['header_img'] = "recrutement-post_details_header.jpg";
    if ($language_segment == 'fr') {
        $GLOBALS['header_tag'] = "Incentive Solution un large panel de prestation";
        $GLOBALS['header_title'] =  "Nos Expertises";
        $GLOBALS['header_description'] = "Voulez-vous développer votre entreprise en ligne ? Vous avez envie d’innover et de dépasser vos concurrents en investissant dans des solutions innovantes qui allient fonctionnalités, expérience client et technologie ? Faites appel à une agence qui dispose de plusieurs expertises, capable de vous  offrir un large choix de services.";
        $GLOBALS['str_1'] = "Avec Incentive";
        $GLOBALS['str_2'] = "votre";
        $GLOBALS['str_3'] = "vision devient réalité !";
        $GLOBALS['str_4'] = "Chez Incentive, nous croyons en la puissance de la créativité et de l'innovation. D’ailleurs, pour poser les socles d’un branding durable et de qualité, notre équipe passionnée repousse les limites pour créer des solutions uniques et révolutionnaires qui vous aideront à vous démarquer de la concurrence. <br>Nous ne nous contentons pas d’appliquer les mêmes recettes. Au contraire, nous travaillons en étroite collaboration avec vous pour comprendre votre vision, vos objectifs et votre identité. Ensuite, nous donnons vie à votre projet en ajoutant notre touche magique.";
        $GLOBALS['str_5'] = "DECOUVRIR INCENTIVE SOLUTIONS";
        $GLOBALS['str_6'] = "Des compétences";
        $GLOBALS['str_7'] = "uniques";
        $GLOBALS['str_8'] = "Plongez dans l'univers de nos services web sur mesure, taillés spécialement pour combler vos besoins uniques. Explorez nos solutions complètes et personnalisées, qui vous conduisent vers le succès digital.";
    }
    else {
        $GLOBALS['header_tag'] = "Incentive Solutions, a wide range of services";
        $GLOBALS['header_title'] = "Our Expertise";
        $GLOBALS['header_description'] = "Do you want to grow your business online? Are you eager to innovate and surpass your competitors by investing in innovative solutions that combine functionality, customer experience, and technology? Turn to an agency with multiple expertise, capable of offering you a wide range of services.";
        $GLOBALS['str_1'] = "With Incentive,";
        $GLOBALS['str_2'] = "your";
        $GLOBALS['str_3'] = "vision becomes reality!";
        $GLOBALS['str_4'] = "At Incentive, we believe in the power of creativity and innovation. In fact, to lay the foundations for sustainable and quality branding, our passionate team pushes boundaries to create unique and revolutionary solutions that will help you stand out from the competition. <br>We don't settle for the same recipes. On the contrary, we work closely with you to understand your vision, goals, and identity. Then, we bring your project to life by adding our magical touch.";
        $GLOBALS['str_5'] = "DISCOVER INCENTIVE SOLUTIONS";
        $GLOBALS['str_6'] = "Unique";
        $GLOBALS['str_7'] = "skills";
        $GLOBALS['str_8'] = "Dive into the world of our tailor-made web services, specially crafted to meet your unique needs. Explore our comprehensive and personalized solutions that lead you to digital success.";
        
    }
    echo '<div class="fl_col gp70">';
        echo do_shortcode('[Header_page]');
        echo do_shortcode('[Expertises_block_01]');
        echo do_shortcode('[Expertises_block_02]');
        echo do_shortcode('[Expertises_block_03]');
        echo do_shortcode('[Contact_footer]');
    echo '</div>';
}

add_shortcode("Expertises_page", "Expertises_page");
