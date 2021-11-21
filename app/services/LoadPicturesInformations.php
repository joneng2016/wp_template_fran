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
        
        
        $photoFromDb = ReadSQLAndExec::getInstance()->readFileExecSQL(AddressEnum::SELECT_ALL_PHOTOS);

        $this->photos = array_map(function($photo){

            $photo->name = protocol($_SERVER["HTTP_HOST"] . "/wp-content/themes/wp_template_fran/assets/photos/{$photo->photo_name}");
            
            return $photo;

        },$photoFromDb);

    }

    public function getPhotos() {
        return $this->photos;
    }
}
