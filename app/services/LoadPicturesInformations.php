<?php

class LoadPicturesInformations extends AbstractLoadInformation {

    public function createTableIfNotExist() {
        ReadSQLAndExec::getInstance()->readFileExecSQL(AddressEnum::CREATE_TABLE_PICTURE);    
    }

    public function selectAllElements($pagination = 0) {
        
        $photoFromDb = ReadSQLAndExec::getInstance()->readFileExecSQL(AddressEnum::SELECT_ALL_PHOTOS,$pagination);

        $this->elements = array_map(function($photo){

            $photo->name = protocol($_SERVER["HTTP_HOST"] . "/wp-content/themes/wp_template_fran/assets/photos/{$photo->photo_name}");            
            return $photo;

        },$photoFromDb);

    }

}
