<?php

class WayToPet {

    /**
     * @param array
     */

    private $wayToPet;

    /**
     * @param array
     */

    private $wayToPetWeb;


    /**
     * @param void
     * 
     * @return void
     */
    public function execute() {
        
        $this->createTableIfNotExist();

        $this->selectTableWayToPet();
        $this->selectTableWayToPetWeb();

    }

    /**
     * @param void
     * 
     * @return void
     */
    private function createTableIfNotExist() {
        
        ReadSQLAndExec::getInstance()->readFileExecSQL(AddressEnum::CREATE_TABLE_WAYTOPET);
        ReadSQLAndExec::getInstance()->readFileExecSQL(AddressEnum::CREATE_TABLE_WAYTOPETWEB);


    }

    /**
     * @param void
     * 
     * @return void
     */
    private function selectTableWayToPet() {
        $this->wayToPet = reset(ReadSQLAndExec::getInstance()->execQuery('SELECT * FROM way_to_pet LIMIT 1'));        
    }


    /**
     * @param void
     * 
     * @return void
     */
    private function selectTableWayToPetWeb() {
        $this->wayToPetWeb = reset(ReadSQLAndExec::getInstance()->execQuery('SELECT * FROM way_to_pet_web LIMIT 1'));
    }

    
    /**
     * @param void
     * 
     * @return array
     */
    public function getWayToPet() {
        return $this->wayToPet;
    }


    /**
     * @param void
     * 
     * @return array
     */
    public function getWayToPetWeb() {
        return $this->wayToPetWeb;
    }
}