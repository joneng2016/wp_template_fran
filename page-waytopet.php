<?php get_header(); ?>

    <div class="standard-body">

        <h2>Como Chegar no Pet</h2>

    </div>

    <div class="body-menu-address" id="way-to-pet">

        <div class="row">            
            
            <div class="col-5 only_image_side_three" id="waytopet-image">
            </div>           

            <div class="col" id="waytopet-content">
                <?php components()->get("box_adress",getWayToPet());?>
            </div>
        </div>

    </div>

</body>

<?php get_footer(); ?>
