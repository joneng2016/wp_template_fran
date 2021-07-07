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