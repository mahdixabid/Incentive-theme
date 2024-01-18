<?php
function footer_primary()
{
    require get_template_directory() . '/base/components/path.php';
    ?>
<?php
ob_start();
    ?>
    <div id="footer" class="container_full fl_col ">
      <div class="block-A fl_row pd40-t-b">
          <div class="fl_row elements_block">
            <div class="logo_footer">
              <a href="<?php echo $home ?>">
                  <img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/logo.svg"; ?>">
              </a>
            </div>
            <div class="fl_row menu_contact">
              <div class="contact_info fl_col gp20">
                <div class="fl_row gp10">
                  <img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/location.svg"; ?>">
                  <p class="p14">Lac 2 avenue de la bourse, immeuble saphir 1E Bloc A-A1-1</p>
                </div>
                <div class="fl_row gp10">
                  <img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/Icon-Phone.svg"; ?>">
                  <p class="p14">+216 25890242</p>
                </div>
                <div class="fl_row gp10">
                  <img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/Icon-Message.svg"; ?>">
                  <p class="p14">contact@incentivesolutions.tech</p>
                </div>
              </div>
              <div class="nav_footer white fl_row">
                <div class="fl_col gp10">
                  <a href="/"><p class="p14">Acceuil</p></a>
                  <a href="/incentive"><p class="p14">Incentive</p></a>
                  <!-- <a href=""><p class="p14">Nos Réalisations</p></a> -->
                </div>
                <div class="fl_col gp10">
                  <a href="/nos-expertises/"><p class="p14">Nos Expertises</p></a>
                  <a href="/recrutement-cariere/"><p class="p14">Recrutement</p></a>
                  <a href="/contact"><p class="p14">Contact</p></a>
                </div>
              </div>
            </div>
          </div>
        <div class="social_media fl_col gp20">
          <p class="p16 white">SUIVEZ-NOUS</p>
          <div class="fl_row gp30 jc">
            <a href="https://www.linkedin.com/company/incentivesolutions/?viewAsMember=true"><img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/linkedin_icon.svg"; ?>"></a>
            <a href="https://www.facebook.com/profile.php?id=100088785302244"><img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/fb.svg"; ?>"></a>
          </div>
        </div>
      </div>
      <div class="block-B fl_row">
        <div class="block_elements fl_row pd10-t-b">
            <div class="copyright fl_row">
              <div><p class="p14 white">All images and content are for the exclusive use by Incentive Solutions</p></div>
              <div><p class="p14 bleu">© <span class="w-700">Incentive Solutions</span> 2023 </p></div>
            </div>
            <div class="fl_row gp20 b_top">
                <a href="#header"><p class="p14  white w-700">Back to top</p></a>
                <img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/row_up.svg"; ?>">
            </div>
          </div>
      </div>

    </div>
    <?php
}

add_shortcode("footer_primary", "footer_primary");
?>