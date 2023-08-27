<?php
function Current_Recrutement_Post()
{
    require get_template_directory() . '/base/components/path.php';

    $post_type = "recrutement";
    ?>
    <div id="Current_Recrutement_Post" class="Hspace container_boxed fl_col gp40">
        <img class="bk_top" src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/we_re_hiring_bk.jpg"; ?>">
        <?php if (is_single() && get_post_type() === $post_type) {
        $post_date = get_the_date('d/m/Y');
        $title = get_the_title();
        $description = get_field("description_recrutement");
        $profile_recrutement = get_field("profile_recrutement");
        $competence_requises_recrutement = get_field("competence_requises_recrutement");
        $niveau_recrutement = get_field("niveau_recrutement");
        $localisation_recrutement = get_field("localisation_recrutement");
        $type_de_contrat_recrutement = get_field("type_de_contrat_recrutement");
        $renumeration_recrutement = get_field("renumeration_recrutement");
        $avantages_recrutement = get_field("avantages_recrutement");
        $status_recrutement = get_field("status_recrutement");
        ?>


        <div class="post_data fl_row pd40-t-b">
            <div class="left_block fl_col gp40">
                <div class="fl_col gp10">
                    <p class="p18 bleu uper w-700">Lorem Ipsum</p>
                    <p class="white p32 w-900"><?php echo $title ?></p>
                </div>
                <div class="fl_col gp10">
                    <p class="p18 bleu uper w-700">Description</p>
                    <p class="white"><?php echo $description ?></p>
                </div>
                <div class="fl_col gp10">
                    <p class="p18 bleu uper w-700">Profile</p>
                    <p class="white"><?php echo $profile_recrutement ?></p>
                </div>
                <div class="fl_col gp10">
                    <p class="p18 bleu uper w-700">Compétence Requises</p>
                    <p class="white"><?php echo $competence_requises_recrutement ?></p>
                </div>
            </div>
            <div class="right_block fl_col gp20 pd40-r-l pd20-t-b">
                <p class="p32 white">Détails</p>
                <div class="fl_col gp10">
                    <div class="fl_col gp5">
                        <p class="p18 bleu uper w-500">Niveau</p>
                        <p class="white"><?php echo $niveau_recrutement ?></p>
                    </div>
                    <div class="fl_col gp5">
                        <p class="p18 bleu uper w-500">Localisation</p>
                        <p class="white"><?php echo $localisation_recrutement ?></p>
                    </div>
                    <div class="fl_col gp5">
                        <p class="p18 bleu uper w-500">Type de contrat</p>
                        <p class="white"><?php echo $type_de_contrat_recrutement ?></p>
                    </div>
                    <div class="fl_col gp5">
                        <p class="p18 bleu uper w-500">Rénumération</p>
                        <p class="white"><?php echo $renumeration_recrutement ?></p>
                    </div>
                    <div class="fl_col gp5">
                        <p class="p18 bleu uper w-500">Avantages</p>
                        <p class="white"><?php echo $avantages_recrutement ?></p>
                    </div>
                    <div class="fl_col gp5">
                        <p class="p18 bleu uper w-500">Status</p>
                        <p class="white"><?php echo $status_recrutement ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="postuler_popup">
            <div class="btn_light large_btn">
                <p class="p14 uper">postuler</p>
            </div>
            <div class="overlay_popup hide">
                <div class="popup pd40 center fl_col gp40">
                    
                    <p class="p36 w-700">Apply for : <span class="job_name bleu p32 "><?php echo $title ?></span></p>
                    
                    <div class="form">
                    <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2 ) ); ?>
                    <img class="close_btn" src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/close_btn_white.svg"; ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <?php
}
}

add_shortcode("Current_Recrutement_Post", "Current_Recrutement_Post");
?>




