<?php

require_once(get_template_directory() . "/app/includes/include.php");

function dd($argInput) {
    var_dump($argInput);
    die();
}

/**
 * @param $inputArg information
 * @return string
 */

function getFooterInformations($information) {
    
    $dictionary = [        
        "facebook" => "https://facebook.com.br/franciele_quadros",
        "instagran" => "https://instragan.com.br/franciele_quadros",
        "email" => "franciele.quadros@hotmail.com",
        "address" => "Rua Izidoro Stavitsky, 343 - Pinheirinho"
    ];

    return $dictionary[$information];
}


/**
 * @param void
 * @return string
 */

function absolutePosition() {
    
    return __DIR__ ;

}

/**
 * @param $inputArg string
 * @return string
 */

function protocol($inputArg) {
    return "http://$inputArg";
}

/**
 * @param $nameOfImage string
 * @return string
 */

function imagePosition($nameOfImage) {
    return protocol($_SERVER["HTTP_HOST"] . "/wp-content/themes/wp_template_fran/assets/images/{$nameOfImage}");
}

/**
 * @param $nameOfImage string
 * @return string
 */

function jsPosition($nameOfImage) {
    return protocol($_SERVER["HTTP_HOST"] . "/wp-content/themes/wp_template_fran/assets/js/{$nameOfImage}");
}

/**
 * @param void
 * @return array
 */

function findByPictures() {

    $response = [];

    try {

        $loadPicInf = new LoadPicturesInformations();
        
        $loadPicInf->execute();
        $response = $loadPicInf->getElements();

    } catch (\Exception $e) {
        throw new Exception(ErrorMsg::PICTURES_EXCEPTIOS_HAPPENS + " " + $e->getMessage());

    }

    return $response;
}

/**
 * @param void
 * @return array
 */

function getServiceText() {

    $response = [];

    try {
        
        $serviceText = new ServiceText();
        
        $serviceText->execute();
        $response = $serviceText->getServices();

    } catch (\Exception $e) {
        throw new Exception(ErrorMsg::SERVICE_EXCEPTIONS_HAPPENS + " " + $e->getMessage());
      
    }

    return $response;
}

/**
 * @param void
 * @return array
 */
function getWayToPet() {

    $response = [];

    try {
        
        $wayToPet = new WayToPet();

        $wayToPet->execute();

        $response = (object) [ 
            'whereIsThePlace' => $wayToPet->getWayToPet(),
            'whereIsInWeb' => $wayToPet->getWayToPetWeb()
        ];

    } catch (\Exception $e) {
        throw new Exception(ErrorMsg::WAY_TOPET_EXCEPTIONS_HAPPENS + " " + $e->getMessage());        
    } 

    return $response;

}

/**
 * @param void
 * $return object
 */

function components() {
   return Components::getInstance();
}


/**
 * @param void
 * @return array
 */

function findByVideos() {

    $response = [];

    try {

        $loadVideoInf = new LoadVideoInformations();            
        $loadVideoInf->execute();

        $response = $loadVideoInf->getElements();

    } catch (\Exception $e) {
        throw new Exception(ErrorMsg::PICTURES_EXCEPTIOS_HAPPENS + " " + $e->getMessage());

    }

    return $response;
}