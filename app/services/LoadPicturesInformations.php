<?php

class LoadPicturesInformations {

    public function execute() {

        $this->createTableIfNotExist();
    }

    private function createTableIfNotExist() {

        $scriptSQL = get_template_directory() . "/app/queries/create_table_if_not_exist.sql";
        $content = file_get_contents($scriptSQL);

        global $wpdb;
        $wpdb->get_results($content, OBJECT );

    }
}

?>