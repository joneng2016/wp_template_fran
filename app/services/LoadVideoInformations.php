<?php

class LoadVideoInformations extends AbstractLoadInformation {


    public function createTableIfNotExist() {
        ReadSQLAndExec::getInstance()->readFileExecSQL(AddressEnum::CREATE_TABLE_VIDEO);
    }

    public function selectAllElements($pagination = 0) {        
        $this->elements = ReadSQLAndExec::getInstance()->readFileExecSQL(AddressEnum::SELECT_ALL_VIDEOS);        
    }
}
