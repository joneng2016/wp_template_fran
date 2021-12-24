<?php

class PaginationController {

    public function execute(Request $request) {        
        
        $value = $request->variables[0]->value;

        return findByPictures($value);
    }
}