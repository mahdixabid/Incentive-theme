<?php
function Header_page()
{
    require get_template_directory() . '/base/components/path.php';
    $img = "GettyImages-1366241371.png";
$tag = "Lorem Ipsum Dolor";
$title =  "Nos Expertises";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sodales bibendum nisl, quis auctor nisl euismod vulputate. Suspendisse tempus ultricies orci, eget maximus eros congue sit amet. Fusce id scelerisque ipsum. Nulla quis lacinia tortor. Phasellus vestibulum porttitor dolor.";
?>
<div style="min-height:80vh" class="container_header">
    <img class="toggle_btn" src="<?php echo $home . "/wp-content/themes/hello-elementor/src/app/assets/img/" . $img; ?>">
    <p class="p18"> <?php echo $tag ?> </p>
    <p class="p60"> <?php echo $title ?> </p>
    <p class="p18"> <?php echo $description ?> </p>
</div>
<?php
}

add_shortcode("Header_page", "Header_page");

?>