<?php

abstract class AbstractLoadInformation {
    
    protected $elements;
    
    public function execute($pagination = 0) {

        $this->createTableIfNotExist();
        $this->selectAllElements($pagination);
    }

    public function getElements() {
        return $this->elements;
    }

    abstract function createTableIfNotExist();

    abstract function selectAllElements($pagination = 0);
}