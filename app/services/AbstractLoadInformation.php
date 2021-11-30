<?php

abstract class AbstractLoadInformation {
    
    protected $elements;
    
    public function execute() {

        $this->createTableIfNotExist();
        $this->selectAllElements();
    }

    public function getElements() {
        return $this->elements;
    }

    abstract function createTableIfNotExist();

    abstract function selectAllElements();
}