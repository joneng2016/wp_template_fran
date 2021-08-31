<?php get_header(); ?>

<?php $services = getServiceText();?>

    <div class="standard-body">

        <h2>Serviços</h2>

    </div>

    <div class="body-menu row">

        <div class="col-8">

            <?php foreach($services as $service): ?>

                <div class="service-card">

                    <div class="row">
                        <div class = "col-1">
                            <img     
                                class="image-patinha"
                                src="<?=imagePosition('patinha.png')?>"
                            >
                        </div>
                        <div class="col">
                            <h5><?=$service->name?></h5>
                        </div>                    
                    </div>
                    
                    <div class="text">
                        <span>
                            <?=$service->description?>
                        </span>
                    </div>

                </div>
            <?php endforeach ?>            

        </div>

        <div class="col-4 only_image_side_two">
        </div>

    </div>

</body>

<?php get_footer(); ?>
