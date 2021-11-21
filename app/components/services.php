<?php $services = $inputs; ?>
 
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