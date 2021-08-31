<?php get_header(); ?>

<?php $wayToPet = getWayToPet(); ?>

    <div class="standard-body">

        <h2>Como Chegar no Pet</h2>

    </div>

    <div class="body-menu">
        
        <div class="address-place">
            
            <h2>Endereço</h2>
            
            <span><strong>Número</strong>  <?=$wayToPet->whereIsThePlace->number;?></span><br>
            <span><strong>CPF</strong>  <?=$wayToPet->whereIsThePlace->zip_code;?></span><br>
            <span><strong>Rua</strong>  <?=$wayToPet->whereIsThePlace->street;?></span><br>
            <span><strong>Bairro</strong>  <?=$wayToPet->whereIsThePlace->neighborhood;?></span><br>
            <span><strong>Cidade</strong>  <?=$wayToPet->whereIsThePlace->city; ?></span><br>
            <span><strong>Estado</strong>  <?=$wayToPet->whereIsThePlace->state; ?></span><br>
            <span><strong>País</strong>  <?=$wayToPet->whereIsThePlace->country; ?></span><br>
        
        </div>

    </div>

</body>

<?php get_footer(); ?>
