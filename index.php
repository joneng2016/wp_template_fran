    <?php get_header(); ?>

        <div id="ttr_main" class="row">

            <div id="ttr_content" class="col-lg-8 col-sm-8 col-md-8 col-xs-12">

                <div class="row">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        
                        <h1><?php the_title(); ?></h1>
                        
                            <h4>Posted on <?php the_time('F jS, Y') ?></h4>
                            <p><?php the_content(__('(more...)')); ?></p>
                        
                        </div>
                        
                    <?php endwhile; else: ?>
                    
                        <p>
                            <?php _e('Sorry, no posts matched your criteria.'); ?>
                        </p>
                
                    <?php endif; ?>
                    
                </div>
            
            </div>
            
            <?php get_sidebar(); ?>

        </div>

    </body>

    <footer>
        <?php get_footer(); ?>
    </footer>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>