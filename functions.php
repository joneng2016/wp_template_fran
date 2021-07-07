<?php
function getFooterInformations($information) {
    
    $dictionary = [        
        "facebook" => "https://facebook.com.br/franciele_quadros",
        "instagran" => "https://instragan.com.br/franciele_quadros",
        "email" => "franciele.quadros@hotmail.com",
        "contato" => "Rua Izidoro Stavitsky, 343 - Pinheirinho"
    ];

    return $dictionary[$information];
}

function absolutePosition() {
    
    return __DIR__ ;

}

function imagePosition($nameOfImage) {
    return "http://" . $_SERVER["HTTP_HOST"] . "/wp-content/themes/matilha_feliz/images/{$nameOfImage}";
}