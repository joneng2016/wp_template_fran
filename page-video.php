<?php get_header(); ?>

<?php $wayToPet = getWayToPet(); ?>

    <div class="standard-body">
        <h2>Vídeos</h2>
    </div>

    <div class="body-menu-address" id="video-page">        
        <?php components()->get("show_videos",findByVideos());?>
    </div>

</body>
<br>
<?php get_footer(); ?>
