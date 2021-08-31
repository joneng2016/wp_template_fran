<?php

class ServiceText {

    private $services;

    public function execute() {

        $this->createTableIfNotExist();
        $this->select();
    }

    /**
     * @param void
     * 
     * @return void
     */

    private function createTableIfNotExist() {
        ReadSQLAndExec::getInstance()->readFileExecSQL(AddressEnum::CREATE_TABLE_SERVICE);
    }

    /**
     * @param void
     * 
     * @return void
     */

    private function select() {
        
        global $wpdb;

        $this->services = ReadSQLAndExec::getInstance()->execQuery("SELECT * FROM services_infs");

    }

    public function getServices() {
        return $this->services;
    }

}