<?php get_header(); ?>

    <div class="standard-body">
        <h2>Fotos</h2>
    </div>

    <div class="body-menu" id="image-page">
        <div class="body-menu-address">
            <?php components()->get("show_infs",findByPictures());?>
        </div>
    </div>

    <?php components()->get("pagination");?>

</body>
<br>
<?php get_footer(); ?>
