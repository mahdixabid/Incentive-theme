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
                  <p class="p14">1718 Park Boulevard Marshalltown, IA 50158</p>
                </div>
                <div class="fl_row gp10">
                  <img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/Icon-Phone.svg"; ?>">
                  <p class="p14">641-754-0072</p>
                </div>
                <div class="fl_row gp10">
                  <img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/Icon-Message.svg"; ?>">
                  <p class="p14">GavinEMaki@rhyta.com</p>
                </div>
              </div>
              <div class="nav_footer white fl_row">
                <div class="fl_col gp10">
                  <p class="p14">Acceuil</p>
                  <p class="p14">Incentive</p>
                  <p class="p14">Nos Réalisations</p>
                </div>
                <div class="fl_col gp10">
                  <p class="p14">Nos Expertises</p>
                  <p class="p14">Recrutement</p>
                  <p class="p14">Contact</p>
                </div>
              </div>
            </div>
          </div>
        <div class="social_media fl_col gp20">
          <p class="p16 white">SUIVEZ-NOUS</p>
          <div class="fl_row gp30">
            <img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/twitter.svg"; ?>">
            <img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/fb.svg"; ?>">
            <img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/instagram.svg"; ?>">
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