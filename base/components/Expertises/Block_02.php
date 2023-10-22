<?php
function Expertises_block_02()
{
    require get_template_directory() . '/base/components/path.php';
    ?>
    <div id="Expertises_block_02" class=" container_boxed">
        <div class="wrapper fl_row">
            <p class="p60 white w-900">Des compétences<span class="bleu"><u> uniques</u></span></p>
            <p class="p18 white">
            Plongez dans l'univers de nos services web sur mesure, taillés spécialement pour combler vos besoins uniques. Explorez nos solutions complètes et personnalisées, qui vous conduisent vers le succès digital. 
            </p>
        </div>
    </div>
<?php
}

add_shortcode("Expertises_block_02", "Expertises_block_02");