<?php

class ReadSQLAndExec {

    private static $instance; 

    private function __construct() {

    }

    public static function getInstance() {

        if (!self::$instance) {
            self::$instance = new ReadSQLAndExec();
        }

        return self::$instance;
    }

    /**
     * 
     * @param string $file 
     * @return array
     * 
     */

    public function readFileExecSQL($file,$pagination = 0) {

        $contentCreateIfNotExist = str_replace("{PAGINATION}",$pagination,file_get_contents(get_template_directory() . $file));
        
        global $wpdb;
        return $wpdb->get_results($contentCreateIfNotExist);
    }

    /**
     * 
     * @param string $file 
     * @return array
     * 
     */

    public function execQuery($sqlExecQuery) {

        global $wpdb;
        return $wpdb->get_results($sqlExecQuery);
    }

}