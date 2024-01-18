<?php
function Incentive_block_03()
{
    require get_template_directory() . '/base/components/path.php';

    $language_segment = get_locale();
    $language_segment = substr($language_segment, 0, 2);
    if ($language_segment == 'fr') {
        $cards = [
            [
                'step' => 'Étape 1',
                'title' => 'Étude de projet',
                'description' => 'Étape fondamentale du processus de réalisation des projets web et digitaux. Elle nous permet de cerner les besoins spécifiques, d`analyser les contraintes et de définir les objectifs. Cette approche méticuleuse garantit la création de solutions sur-mesure et assure le succès de nos prestations.',
                'number' => '01',
            ],
            [
                'step' => 'Étape 2',
                'title' => 'Conception',
                'description' => 'C’est un véritable tour de magie créatif. Notre équipe fusionne habilement vos idées les plus audacieuses pour créer une expérience captivante. Avec des maquettes précises, votre projet prendra vie sous une forme esthétiquement époustouflante et fonctionnellement performante. Préparez-vous à être émerveillé.',
                'number' => '02',
            ],
            [
                'step' => 'Étape 3',
                'title' => 'Approche UX/UI',
                'description' => 'C`est est la clé de voûte de votre succès numérique. Grâce à notre expertise en expérience utilisateur et en conception d`interface, nous concevons des solutions engageantes et intuitives. Ainsi, chaque élément est méticuleusement conçu pour susciter l`engagement, et renforcer votre image de marque.
                ',
                'number' => '03',
            ],
            [
                'step' => 'Étape 4',
                'title' => 'Développement',
                'description' => 'Une fois les besoins analysés, l`étape de développement est le cœur du processus de création d`un site web ou d`une application mobile. Les développeurs utilisent des langages de programmation tels que HTML, CSS, JavaScript, et des frameworks adaptés pour transformer la conception en code fonctionnel.',
                'number' => '04',
            ],
            [
                'step' => 'Étape 5',
                'title' => 'Test et validation',
                'description' => 'Pilier fondamental du processus de développement web et mobile, La phase de test et de validation sont effectués pour vérifier la qualité et la performance du produit. Les bugs et les erreurs sont identifiés et corrigés pour garantir un fonctionnement fluide.',
                'number' => '05',
            ],
            [
                'step' => 'Étape 6',
                'title' => 'Déploiement',
                'description' => 'Une fois que le produit est prêt, il est déployé sur les serveurs clients, en suivant une approche méthodique, cette étape implique la configuration de l`environnement de production, la gestion des ressources et un lancement planifié pour garantir le succès de votre projet.',
                'number' => '06',
            ],
            [
                'step' => 'Étape 7',
                'title' => 'Formation',
                'description' => 'Pour concrétiser vos projets, nous nous engageons à vos côtés. Notre accompagnement se traduit par des cycles de formation où notre équipe partageant son savoir-faire et vous guident. Vous serez ainsi en mesure de gérer et d`optimiser vos projets en toute autonomie.',
                'number' => '07',
            ],
        ];
    }
    else {
        $cards = [
            [
                'step' => 'Step 1',
                'title' => 'Project Study',
                'description' => 'A fundamental step in the process of creating web and digital projects. It allows us to understand specific needs, analyze constraints, and define objectives. This meticulous approach ensures the creation of tailor-made solutions and guarantees the success of our services.',
                'number' => '01',
            ],
            [
                'step' => 'Step 2',
                'title' => 'Design',
                'description' => 'It"s a true creative magic trick. Our team skillfully merges your boldest ideas to create a captivating experience. With precise mock-ups, your project will come to life in a visually stunning and functionally efficient form. Get ready to be amazed.',
                'number' => '02',
            ],
            [
                'step' => 'Step 3',
                'title' => 'UX/UI Approach',
                'description' => 'This is the cornerstone of your digital success. Thanks to our expertise in user experience and interface design, we create engaging and intuitive solutions. Each element is meticulously designed to encourage engagement and strengthen your brand image.',
                'number' => '03',
            ],
            [
                'step' => 'Step 4',
                'title' => 'Development',
                'description' => 'Once the needs are analyzed, the development stage is the heart of the process of creating a website or mobile application. Developers use programming languages such as HTML, CSS, JavaScript, and suitable frameworks to transform the design into functional code.',
                'number' => '04',
            ],
            [
                'step' => 'Step 5',
                'title' => 'Testing and Validation',
                'description' => 'A fundamental pillar of the web and mobile development process, the testing and validation phase is carried out to check the quality and performance of the product. Bugs and errors are identified and corrected to ensure smooth operation.',
                'number' => '05',
            ],
            [
                'step' => 'Step 6',
                'title' => 'Deployment',
                'description' => 'Once the product is ready, it is deployed on client servers. Following a methodical approach, this stage involves configuring the production environment, managing resources, and a planned launch to ensure the success of your project.',
                'number' => '06',
            ],
            [
                'step' => 'Step 7',
                'title' => 'Training',
                'description' => 'To bring your projects to fruition, we commit to supporting you. Our support is reflected in training sessions where our team shares its expertise and guides you. This way, you will be able to manage and optimize your projects independently.',
                'number' => '07',
            ],
        ];
        
    }

    ?>
    <div id="Incentive_block_03" class=" container_boxed fl_col gp40">
        <p class="p60 white w-700"> <?php echo $GLOBALS['str_12']; ?><span class="bleu w-900 uper"> <?php echo $GLOBALS['str_13']; ?></span> <?php echo $GLOBALS['str_14']; ?> <span class="bleu w-900 uper"> <?php echo $GLOBALS['str_15']; ?></span></p>

        <div class="cards_container white cards_desktop">
            <?php foreach ($cards as $card) : ?>
                <div class="single_card pd40">
                    <div class="card_header">
                        <p class="p18"><?= $card['step'] ?></p>
                        <p class="p32 w-900"><u><?= $card['title'] ?></u></p>
                    </div>
                    <div class="card_body">
                        <p class="p16"><?= $card['description'] ?></p>
                    </div>
                    <div class="card_footer fl_row">
                        <p class="w-900"><?= $card['number'] ?></p>
                        <img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/shape_card.svg"; ?>">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>


        <div class="swiper-container cards_container white cards_mobile">
            <div class="swiper-wrapper">
                <?php foreach ($cards as $card) : ?>
                    <div class="swiper-slide single_card pd40">
                        <div class="card_header">
                            <p class="p18"><?= $card['step'] ?></p>
                            <p class="p32 w-900"><u><?= $card['title'] ?></u></p>
                        </div>
                        <div class="card_body">
                            <p class="p16"><?= $card['description'] ?></p>
                        </div>
                        <div class="card_footer fl_row">
                            <p class="w-900"><?= $card['number'] ?></p>
                            <img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/shape_card.svg"; ?>">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <script>
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 1,
                spaceBetween: 20,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                },
            });
        </script>
    </div>

    </div>
    <?php
}

add_shortcode("Incentive_block_03", "Incentive_block_03");
