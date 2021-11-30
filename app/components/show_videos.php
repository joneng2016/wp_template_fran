<center>

<?php foreach($inputs as $key => $value): ?>
    
    <div class="to-photo">
    
        <iframe width="720" height="615" style="border-radius: 15px;" src="<?=$value->youtube_address?>&controls=0" >
        </iframe>            
        

        <div>
            <span class="description-photo">
                <?=$value->description?>
            </span>
        </div>

    </div>

<?php endforeach; ?>

</center>
