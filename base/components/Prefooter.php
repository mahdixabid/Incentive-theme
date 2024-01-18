<?php
function Prefooter() {
  require get_template_directory() . '/base/components/path.php';
  $language_segment = get_locale();
  $language_segment = substr($language_segment, 0, 2);
  if ($language_segment == 'fr') {
      $GLOBALS['Pre_footer_str_1'] = "N’ésitez Pas À";
      $GLOBALS['Pre_footer_str_2'] = "nous contacter";
      $GLOBALS['Pre_footer_str_3'] = "Contactez-nous pour toute demande ou information. Nous sommes à votre disposition pour répondre à vos questions et vous aider dans vos besoins";
  } else {
    $GLOBALS['Pre_footer_str_1'] = "Feel free to";
    $GLOBALS['Pre_footer_str_2'] = "contact us";
    $GLOBALS['Pre_footer_str_3'] = "Contact us for any inquiries or information. We are at your disposal to answer your questions and assist you with your needs.";    
  }
?>
<div id="Prefooter" class="container_boxed fl_row">

  <img class="bk_block" src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/bk_prefooter.jpg"; ?>">
      <div class="fl_row left_block">
        <div class="block_title">
          <p class="p32 white  w-900 "><?php echo $GLOBALS['Pre_footer_str_1']; ?>  <u class="bleu uper"><?php echo $GLOBALS['Pre_footer_str_2']; ?></u></p>
        </div>
        <div class="block_description fl_col gp40">
          <p class="p16 white">
          <?php echo $GLOBALS['Pre_footer_str_3']; ?>
          </p>
        </div>
      </div>
      <div class="block_element">
        <?php echo do_shortcode( '[telegram]' ); ?>
      </div>
</div>
<?php
}

add_shortcode("Prefooter", "Prefooter");
?>
