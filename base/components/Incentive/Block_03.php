<?php
function Incentive_block_03()
{
    require get_template_directory() . '/base/components/path.php';

    // Define an array of card information
    $cards = [
        [
            'step' => 'Étape 1',
            'title' => 'ETUDE DE PROJET',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec felis gravida, efficitur felis id, feugiat velit. Fusce bibendum, ex et tincidunt volutpat, magna enim vestibulum massa, at semper velit dui sed nulla. Aliquam a mauris velit. Ut in risus dolor.',
            'number' => '01',
        ],
        [
            'step' => 'Étape 2',
            'title' => 'ETUDE DE PROJET',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec felis gravida, efficitur felis id, feugiat velit. Fusce bibendum, ex et tincidunt volutpat, magna enim vestibulum massa, at semper velit dui sed nulla. Aliquam a mauris velit. Ut in risus dolor.',
            'number' => '02',
        ],
        [
            'step' => 'Étape 3',
            'title' => 'ETUDE DE PROJET',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec felis gravida, efficitur felis id, feugiat velit. Fusce bibendum, ex et tincidunt volutpat, magna enim vestibulum massa, at semper velit dui sed nulla. Aliquam a mauris velit. Ut in risus dolor.',
            'number' => '03',
        ],
        [
            'step' => 'Étape 4',
            'title' => 'ETUDE DE PROJET',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec felis gravida, efficitur felis id, feugiat velit. Fusce bibendum, ex et tincidunt volutpat, magna enim vestibulum massa, at semper velit dui sed nulla. Aliquam a mauris velit. Ut in risus dolor.',
            'number' => '04',
        ],
        [
            'step' => 'Étape 5',
            'title' => 'ETUDE DE PROJET',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec felis gravida, efficitur felis id, feugiat velit. Fusce bibendum, ex et tincidunt volutpat, magna enim vestibulum massa, at semper velit dui sed nulla. Aliquam a mauris velit. Ut in risus dolor.',
            'number' => '05',
        ],
        [
            'step' => 'Étape 6',
            'title' => 'ETUDE DE PROJET',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec felis gravida, efficitur felis id, feugiat velit. Fusce bibendum, ex et tincidunt volutpat, magna enim vestibulum massa, at semper velit dui sed nulla. Aliquam a mauris velit. Ut in risus dolor.',
            'number' => '06',
        ],
        [
            'step' => 'Étape 7',
            'title' => 'ETUDE DE PROJET',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec felis gravida, efficitur felis id, feugiat velit. Fusce bibendum, ex et tincidunt volutpat, magna enim vestibulum massa, at semper velit dui sed nulla. Aliquam a mauris velit. Ut in risus dolor.',
            'number' => '07',
        ],
    ];
    ?>
    <div id="Incentive_block_03" class=" container_boxed fl_col gp40">
        <p class="p60 white w-700">Notre <span class="bleu w-900 uper">PROCESSUS</span> De <span class="bleu w-900 uper">RéALISATION</span></p>

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
