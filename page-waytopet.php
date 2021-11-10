<?php get_header(); ?>

<?php $wayToPet = getWayToPet(); ?>

    <div class="standard-body">

        <h2>Como Chegar no Pet</h2>

    </div>

    <div class="body-menu-address">

        <div class="row">            
            
            <div class="col-5 only_image_side_three">
            </div>           

            <div class="col">
                
                <div class="box_address">
                    <iframe
                        class="google-iframe" 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3600.4618662380444!2d-49.27542634922787!3d-25.522987783665922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dcfb7097c55389%3A0x8c2538ae524a6a05!2sRua%20Izidoro%20Stavitzki%2C%20358%20-%20Pinheirinho%2C%20Curitiba%20-%20PR%2C%2081825-380!5e0!3m2!1spt-BR!2sbr!4v1631664377388!5m2!1spt-BR!2sbr" 
                        width="90%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy"
                    >
                    </iframe>
                    
                    <div class="address">
                        <?=$wayToPet->whereIsThePlace->street;?>,        
                        <?=$wayToPet->whereIsThePlace->number;?>,        
                        <?=$wayToPet->whereIsThePlace->zip_code;?> -      
                        <?=$wayToPet->whereIsThePlace->neighborhood;?>  
                        <?=$wayToPet->whereIsThePlace->city; ?>         
                        <?=$wayToPet->whereIsThePlace->state; ?> -
                        <?=$wayToPet->whereIsThePlace->country; ?>      
                    </div>
                                
                                            
                    <div class="address-web">
                        
                        <h3 class="title_social_network">Você pode encontrar em contato consco nas seguintes redes sociais</h3>

                        <a class="type_page_waytoped" href="<?=$wayToPet->whereIsInWeb->url_email?>">
                            <img                 
                                class="img-footer"
                                src="<?=imagePosition('email.png')?>"
                                style="margin-right:5px;"
                            >                        
                            <?=$wayToPet->whereIsInWeb->email;?> 
                        </a>
                        
                        <br>
                        
                        <a class="type_page_waytoped" href="<?=$wayToPet->whereIsInWeb->url_facebook?>">
                            <img     
                                class="img-footer"            
                                src="<?=imagePosition('facebook.png')?>"
                                style="margin-right:5px;"
                            >
                            <?=$wayToPet->whereIsInWeb->facebook;?>
                        </a>
                        
                        <br>
                        
                        <a class="type_page_waytoped" href="<?=$wayToPet->whereIsInWeb->url_instagran?>">
                            <img                 
                                class="img-footer"
                                src="<?=imagePosition('instagram.png')?>"
                                style="margin-right:5px;"
                            >
                            <?=$wayToPet->whereIsInWeb->instagran;?>
                        </a>
                    
                    </div>
                

                </div>

            </div>
        </div>

    </div>

</body>

<?php get_footer(); ?>
