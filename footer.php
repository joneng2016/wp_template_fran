<?php $wayToPet = getWayToPet(); ?>

<footer class="footer-style">

    <div style="color:#fff;padding-top:15px;">
        
        <center>   

            <span
                class="d-inline-block" 
                tabindex="0" 
                data-toggle="tooltip" 
                title="<?= $wayToPet->whereIsInWeb->facebook; ?>"
            >            
                <a class="type_footer" href="<?=$inputs->whereIsInWeb->url_facebook?>">
                    
                    <img     
                        class="img-footer"            
                        src="<?=imagePosition('facebook.png')?>"
                        style="margin-right:5px;"
                    >
                    
                    <?= $wayToPet->whereIsInWeb->facebook; ?>

                </a>
            </span>
                <br>
            <span
                class="d-inline-block" 
                tabindex="0" 
                data-toggle="tooltip" 
                title="<?=$wayToPet->whereIsInWeb->instagran?>"
            >
                <a class="type_footer" href="<?=$wayToPet->whereIsInWeb->url_instagran?>"> 
                    
                    <img                 
                        class="img-footer"
                        src="<?=imagePosition('instagram.png')?>"
                        style="margin-right:5px;"
                    >
                    
                    <?=$wayToPet->whereIsInWeb->instagran?> 
                </a>
            </span>
                <br> 
            <span>
                <a class="type_footer" > 
                    
                    <img                 
                        class="img-footer"
                        src="<?=imagePosition('email.png')?>"
                        style="margin-right:5px;"
                    >
                    
                    <strong> 
                        <?=$wayToPet->whereIsInWeb->email?>
                    </strong> 

                </a>
            </span>
                <br>
                <br>
            <span style="margin-top:20px;" class="type_footer">
                <?php components()->get("address",$wayToPet);?>
            </span>
                <br>
                <br>        
            <span style="font-size:12px;">Jonathan M. Samara, Desenvolvedor</span>                 
        </center>

    </div>
</footer>


</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="module" src="<?=jsPosition('function.js')?>"> 
</script>