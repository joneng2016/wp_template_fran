<?php

function dd($argInput) {
    var_dump($argInput);
    die();
}

function getFooterInformations($information) {
    
    $dictionary = [        
        "facebook" => "https://facebook.com.br/franciele_quadros",
        "instagran" => "https://instragan.com.br/franciele_quadros",
        "email" => "franciele.quadros@hotmail.com",
        "address" => "Rua Izidoro Stavitsky, 343 - Pinheirinho"
    ];

    return $dictionary[$information];
}

function absolutePosition() {
    
    return __DIR__ ;

}

function protocol($inputArg) {
    return "http://$inputArg";
}

function imagePosition($nameOfImage) {
    return protocol($_SERVER["HTTP_HOST"] . "/wp-content/themes/matilha_feliz/assets/images/{$nameOfImage}");
}

function jsPosition($nameOfImage) {
    return protocol($_SERVER["HTTP_HOST"] . "/wp-content/themes/matilha_feliz/assets/js/{$nameOfImage}");
}

/**
 * @param void
 * @return array
 */

function findByPictures() {

    require_once(get_template_directory() . "/app/services/LoadPicturesInformations.php");

    $response = [];

    try {
        
        $loadPicInf = new LoadPicturesInformations();
        
        $loadPicInf->execute();
        $response = $loadPicInf->getPhotos();

    } catch (\Exception $th) {
        throw new Exception("Error Processing Request", 1);
        
    }

    return $response;
}

/**
 * @param void
 * @return array
 */

function getServiceText() {
 
    require_once(get_template_directory() . "/app/services/ServiceText.php");
 
    $response = [];

    try {
        
        $serviceText = new ServiceText();
        
        $serviceText->execute();
        $response = $serviceText->getServices();

    } catch (\Exception $th) {
        throw new Exception("Error Processing Request", 1);
        
    }

    return $response;
}