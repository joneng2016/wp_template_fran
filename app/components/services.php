<?php $services = $inputs; ?>
 
<?php foreach($services as $service): ?>

<div class="service-card">

    <div class="service-card-header">
        <img     
            class="image-patinha"
            src="<?=imagePosition('patinha.png')?>"
        >
        <span><?=$service->name?></span>
    </div>
    
    <div class="service-card-text">
        <span>
            <?=$service->description?>
        </span>
    </div>

</div>
<?php endforeach ?>