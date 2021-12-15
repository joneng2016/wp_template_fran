<?php

class Routes {

    private function __construct() {}

    public static function process($routes) {

        $request = self::buildRequestObject();
        return self::processRoute($routes,$request);
    }

    private static function buildRequestObject() {
        $request = new Request();

        $url = $_SERVER['REQUEST_URI'];
        
        $arrayUrl = explode("?",$url);
        
        $request->url = $arrayUrl[0]; 

        if (isset($arrayUrl[1])) {
            
            $stringVariables = explode("&",$arrayUrl[1]);

            $relaNameValue = array_map(function($element) {                
                $nameValue = explode("=",$element);                
                return (object) [
                    $nameValue[0]  => $nameValue[1],                    
                ];
            },$stringVariables);

            $request->variables = $relaNameValue;

        }

        return $request;
    }
    
    private static function processRoute($routes,$request) {
        $route = array_filter($routes,function($route) use ($request) {            
            return $request->url == "/".array_keys($route)[0];
        });
        if (sizeof($route) > 0) {                        
            $nameClass = reset($route[0]);
            if (class_exists($nameClass)) {
                return (new $nameClass)->execute($request);
            }
        }
    } 
}