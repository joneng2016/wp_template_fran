<?php

class Components {

    private static $instance;

    private function __construct() {
        //singleton 
    }

    /**
     * @param void
     * @return object
     */


    public static function getInstance() {

        if (!self::$instance) {
            self::$instance = new Components();
        }

        return self::$instance;

    }

    /**
     * @param string name
     * @return string
     */

    public function get() {
        
        $args = func_get_args();

        if (sizeof($args) > 2) {
            throw new Exception("only 2 args is possible");
        }

        $name = $args[0];

        if (isset($args[1])) {
            $inputs = $args[1];
        }

        $where = get_template_directory() . "/app/components/{$name}.php";

        if (!file_get_contents($where)) {
            throw new Exception("This component does not exists");
        }
        
        require $where;
    }
}