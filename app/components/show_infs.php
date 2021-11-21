<center>

<?php foreach($inputs as $key => $value): ?>
    
    <div class="to-photo">
    
        <div>
            <img
                class="image-photo"
                src="<?=$value->name?>"
            >
        </div>

        <div>
            <span class="description-photo">
                <?=$value->description?>
            </span>
        </div>

    </div>

<?php endforeach; ?>

</center>
