<?php

class ServiceText {

    private $services;

    public function execute() {

        $this->createTableIfNotExist();
        $this->select();
    }

    private function createTableIfNotExist() {

        $contentCreateIfNotExist = file_get_contents(get_template_directory() . "/app/queries/create_table_if_not_exist_services.sql");

        global $wpdb;
        $wpdb->get_results($contentCreateIfNotExist);

    }

    private function select() {
        
        global $wpdb;

        $this->services = $wpdb->get_results("SELECT * FROM services_infs");

    }

    public function getServices() {
        return $this->services;
    }

}