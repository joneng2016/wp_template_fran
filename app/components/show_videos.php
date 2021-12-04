<center>

<?php foreach($inputs as $key => $value): ?>
    
    <div class="to-photo">
    
        <iframe class="iframe-video" src="<?=$value->youtube_address?>&controls=0" >
        </iframe>            
        
        <div>
            <span class="description-photo">
                <?=$value->description?>
            </span>
        </div>

    </div>

<?php endforeach; ?>

</center>
