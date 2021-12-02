<?php get_header(); ?>

    <div class="standard-body">

        <h2>Serviços</h2>

    </div>

    <div class="body-menu row">

        <div class="col-8" id="service-dog-text">
            <?php components()->get("services",getServiceText());?>
        </div>

        <div class="col-4 only_image_side_two" id="service-dog-image">
        </div>

    </div>

</body>

<?php get_footer(); ?>
