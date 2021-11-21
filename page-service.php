<?php get_header(); ?>

<?php $services = getServiceText();?>

    <div class="standard-body">

        <h2>Serviços</h2>

    </div>

    <div class="body-menu row">

        <div class="col-8">
            <?php components()->get("services",$services);?>
        </div>

        <div class="col-4 only_image_side_two">
        </div>

    </div>

</body>

<?php get_footer(); ?>
