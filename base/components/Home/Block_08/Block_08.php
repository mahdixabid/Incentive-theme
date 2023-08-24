<?php
function Block_08() {
  require get_template_directory() . '/base/components/path.php';
?>
<div id="Block_08" class="container_boxed fl_row">

  <img class="bk_block" src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/bk_prefooter.jpg"; ?>">
      <div class="fl_row left_block">
        <div class="block_title">
          <p class="p32 white  w-900 ">N’ésitez Pas À  <u class="bleu uper">nous contacter</u></p>
        </div>
        <div class="block_description fl_col gp40">
          <p class="p16 white">
          Contactez-nous pour toute demande ou information. Nous sommes à votre disposition pour répondre à vos questions et vous aider dans vos besoins
          </p>
          <div class="light_btn fl_row gp10">
            <p class="p16 bleu w-700">En Savoir Plus</p>
            <img src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/arrow_right_bleu.svg"; ?>">
          </div>
        </div>
      </div>
      <div class="block_element">
        <?php echo do_shortcode( '[telegram]' ); ?>
      </div>
</div>
<?php
}

add_shortcode("Block_08", "Block_08");
?>
