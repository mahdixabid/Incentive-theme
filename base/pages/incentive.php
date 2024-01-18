<?php
function incentive()
{
    require get_template_directory() . '/base/components/path.php';
    $language_segment = get_locale();
    $language_segment = substr($language_segment, 0, 2);
    $GLOBALS['header_img'] = "recrutement-post_details_header.jpg";
    if ($language_segment == 'fr') {
    $GLOBALS['header_tag'] = "L’agence Incentive Solutions";
    $GLOBALS['header_title'] =  "Passion Technologique, Expertise Digitale";
    $GLOBALS['header_description'] = "Nous sommes une équipe de passionnés, des geeks du marketing digital dédiés à la croissance de nos clients. Notre objectif principal est de vous positionner en tant queleader incontesté de votre industrie. Avec une approche axée sur les résultats, nous travaillons avec dévouement pour atteindre vos objectifs.";

    $GLOBALS['str_1'] = "UN PARTENAIRE";
    $GLOBALS['str_2'] = "technologique";
    $GLOBALS['str_3'] = "Partenaire technologique stratégique. Nous sommes des experts en technologies innovantes. Nous vous offrons la meilleure solution grâce à notre expertise métier,  à notre maîtrise des dernières technologies et des meilleures pratiques en marketing pour booster le business de votre marque.";
    $GLOBALS['str_4'] = "NOS";
    $GLOBALS['str_5'] = "valeurs";
    $GLOBALS['str_6'] = "Qualité";
    $GLOBALS['str_7'] = "En s’appuyant sur ses années d’expérience, Incentive s'engage à fournir des solutions personnalisées et à haute performance pour répondre aux besoins de ses clients et améliorer leur réputation.";
    $GLOBALS['str_8'] = "Transparence";
    $GLOBALS['str_9'] = "Nous prônons la transparence dans notre communication avec nos clients, en fournissant des mises à jour régulières sur l'avancement des projets et en étant honnête sur les problèmes et défis rencontrés.";
    $GLOBALS['str_10'] = "Responsabilité";
    $GLOBALS['str_11'] = "Incentive fournit un service de confidentialité et un service après-vente de qualité pour répondre aux questions et aux problèmes rencontrés par les clients après la mise en ligne de leurs sites web ou de leurs applications.";
    $GLOBALS['str_12'] = "Notre";
    $GLOBALS['str_13'] = "PROCESSUS";
    $GLOBALS['str_14'] = "De";
    $GLOBALS['str_15'] = "RéALISATION";
    $GLOBALS['str_16'] = "Notre";
    $GLOBALS['str_17'] = "METHODOLOGIE";
    $GLOBALS['str_18'] = "Chez Incentive Solutions nous croyons en l'approche agile. D’ailleurs, nous encourageons la collaboration et l'implication de nos clients dans le processus de développement, afin de mieux comprendre leurs besoins et leurs attentes. Ensemble, nous créons des solutions web performantes et innovantes.";
    $GLOBALS['str_19'] = "Résumé et schéma";
    $GLOBALS['str_20'] = "La Méthodologie Agile";
    $GLOBALS['str_21'] = "Notre";
    $GLOBALS['str_22'] = "équipe";
    $GLOBALS['str_23'] = "Une équipe d'experts disponibles pour vous accompagner de manière personnalisée et durable.";
    $GLOBALS['str_24'] = "En savoir plus";
    $GLOBALS['str_25'] = "Ou";
    $GLOBALS['str_26'] = "nous";
    $GLOBALS['str_27'] = "trouver";
    $GLOBALS['str_28'] = "Incentive Solutions, une agence digitale locale et proche de vous. <br>Nous sommes fiers de notre présence solide ainsi que de notre portée nationale. Nos bureaux sont stratégiquement situés dans des endroits clés, offrant ainsi une accessibilité maximale à nos clients.";

    } else {
    $GLOBALS['header_tag'] = "The Incentive Solutions Agency";
    $GLOBALS['header_title'] = "Technological Passion, Digital Expertise";
    $GLOBALS['header_description'] = "We are a team of enthusiasts, digital marketing geeks dedicated to the growth of our clients. Our main goal is to position you as the undisputed leader in your industry. With a results-oriented approach, we work with dedication to achieve your goals.";
    $GLOBALS['str_1'] = "A";
    $GLOBALS['str_2'] = "technological";
    $GLOBALS['str_3'] = "Strategic technological partner. We are experts in innovative technologies. We offer you the best solution through our industry expertise, mastery of the latest technologies, and best practices in marketing to boost your brand's business.";
    $GLOBALS['str_4'] = "OUR";
    $GLOBALS['str_5'] = "values";
    $GLOBALS['str_6'] = "Quality";
    $GLOBALS['str_7'] = "Drawing on years of experience, Incentive is committed to providing customized and high-performance solutions to meet the needs of its clients and enhance their reputation.";
    $GLOBALS['str_8'] = "Transparency";
    $GLOBALS['str_9'] = "We advocate transparency in our communication with clients, providing regular updates on project progress and being honest about encountered issues and challenges.";
    $GLOBALS['str_10'] = "Responsibility";
    $GLOBALS['str_11'] = "Incentive provides quality post-launch support and confidentiality to address questions and issues clients may encounter after the deployment of their websites or applications.";
    $GLOBALS['str_12'] = "Our";
    $GLOBALS['str_13'] = "PROCESS";
    $GLOBALS['str_14'] = "From";
    $GLOBALS['str_15'] = "REALIZATION";
    $GLOBALS['str_16'] = "Our";
    $GLOBALS['str_17'] = "METHODOLOGY";
    $GLOBALS['str_18'] = "At Incentive Solutions, we believe in the agile approach. In fact, we encourage collaboration and the involvement of our clients in the development process to better understand their needs and expectations. Together, we create high-performing and innovative web solutions.";
    $GLOBALS['str_19'] = "Summary and Diagram";
    $GLOBALS['str_20'] = "The Agile Methodology";
    $GLOBALS['str_21'] = "Our";
    $GLOBALS['str_22'] = "team";
    $GLOBALS['str_23'] = "A team of experts available to support you in a personalized and sustainable manner.";
    $GLOBALS['str_24'] = "Learn more";
    $GLOBALS['str_25'] = "Or";
    $GLOBALS['str_26'] = "find";
    $GLOBALS['str_27'] = "us";
    $GLOBALS['str_28'] = "Incentive Solutions, a local digital agency close to you. <br>We take pride in our strong presence and national reach. Our offices are strategically located in key places, providing maximum accessibility to our clients.";

        
     }
    echo '<div class="incentive_page fl_col gp70">';
        echo do_shortcode('[Header_page]');
        echo do_shortcode('[Incentive_block_01]');
        echo do_shortcode('[Incentive_block_02]');
        echo do_shortcode('[Incentive_block_03]');
        echo do_shortcode('[Incentive_block_04]');
        echo do_shortcode('[Incentive_block_05]');
        echo do_shortcode('[Incentive_block_06]');
        echo do_shortcode('[Contact_footer]');
    echo "</div>";
}

add_shortcode("incentive", "incentive");

?>