<?php
function Incentive_block_02()
{
    require get_template_directory() . '/base/components/path.php';
    ?>
    <div id="Incentive_block_02" class=" container_boxed fl_col gp40">
    <div class="wrapper fl_row">
        <div class="left_block fl_row">
            <p class="p60 white uper w-900">NOS <span class="bleu"><u>valeurs</u></span></p>
            <img class="toggle_btn" src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/lines_circle.svg"?>">
        </div>
        <div class="right_block fl_col">
            <div class="list_item fl_row gp40">
                <div class="number"><p class="p18 white w-900 pd10-r-l pd10-t-b">01</p></div>
                <div class="list_text fl_col gp10">
                    <p class="p32 white uper w-900">Qualité</p>
                    <p class="p18 white">
                    En s’appuyant sur ses années d’expérience, Incentive s'engage à fournir des solutions personnalisées et à haute performance pour répondre aux besoins de ses clients et améliorer leur réputation.
                    </p>
                </div>
            </div>
            <div class="list_item fl_row gp40">
                <div class="number"><p class="p18 white w-900 pd10-r-l pd10-t-b">02</p></div>
                <div class="list_text fl_col gp10">
                    <p class="p32 white uper w-900">Transparence</p>
                    <p class="p18 white">
                    Nous prônons la transparence dans notre communication avec nos clients, en fournissant des mises à jour régulières sur l'avancement des projets et en étant honnête sur les problèmes et défis rencontrés.
                </p>
                </div>
            </div>
            <div class="list_item fl_row gp40">
                <div class="number"><p class="p18 white w-900 pd10-r-l pd10-t-b">03</p></div>
                <div class="list_text fl_col gp10">
                    <p class="p32 white uper w-900">Responsabilité</p>
                    <p class="p18 white">
                    Incentive fournit un service de confidentialité et un service après-vente de qualité pour répondre aux questions et aux problèmes rencontrés par les clients après la mise en ligne de leurs sites web ou de leurs applications.
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php
}

add_shortcode("Incentive_block_02", "Incentive_block_02");