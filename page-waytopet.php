<?php get_header(); ?>

    <div class="standard-body">

        <h2>Como Chegar no Pet</h2>

    </div>

    <div class="body-menu-address">

        <div class="row">            
            
            <div class="col-5 only_image_side_three">
            </div>           

            <div class="col">
                <?php Components::getInstance()->get("box_adress",getWayToPet());?>                
            </div>
        </div>

    </div>

</body>

<?php get_footer(); ?>
