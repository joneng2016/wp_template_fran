<?php

class LoadPicturesInformations {

    private $photos;

    public function execute() {

        $this->createTableIfNotExist();
        $this->selectAllPhotos();
    }

    private function createTableIfNotExist() {

        ReadSQLAndExec::getInstance()->readFileExecSQL(AddressEnum::CREATE_TABLE_PICTURE);
    

    }

    private function selectAllPhotos() {
        
        global $wpdb;

        $selectPhotosScript = ReadSQLAndExec::getInstance()->execQuery(AddressEnum::SELECT_ALL_PHOTOS);
        
        $this->photos = array_map(function($photo){
            
            $photo->photo_name = protocol($_SERVER["HTTP_HOST"] . "/wp-content/themes/matilha_feliz/assets/photos/{$photo->photo_name}");
            
            return $photo;

        },$wpdb->get_results($selectPhotosScript));

    }

    public function getPhotos() {
        return $this->photos;
    }
}

?>