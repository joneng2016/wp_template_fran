<?php

class LoadPicturesInformations {

    private $photos;

    public function execute() {

        $this->createTableIfNotExist();
        $this->selectAllPhotos();
    }

    private function createTableIfNotExist() {

        $contentCreateIfNotExist = file_get_contents(get_template_directory() . "/app/queries/create_table_if_not_exist.sql");
        
        global $wpdb;
        $wpdb->get_results($contentCreateIfNotExist);

    }

    private function selectAllPhotos() {
        
        global $wpdb;

        $selectPhotosScript = file_get_contents(get_template_directory() . "/app/queries/select_all_photos.sql");

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