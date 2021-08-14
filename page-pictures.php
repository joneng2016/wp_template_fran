<?php get_header(); ?>

<?php 
    $photos = findByPictures();
?>

    <div class="standard-body">
        <h2>Fotos</h2>
    </div>

    <div class="body-menu">
        <center>

        <?php foreach($photos as $keyPhoto => $photo): ?>
            
            <div class="to-photo">
            
                <div>
                    <img
                        class="image-photo"
                        src="<?=$photo->photo_name?>"
                    >
                </div>

                <div>
                    <span class="description-photo">
                        <?=$photo->description?>
                    </span>
                </div>

            </div>

        <?php endforeach; ?>
        
        </center>

    </div>

</body>

<?php get_footer(); ?>
