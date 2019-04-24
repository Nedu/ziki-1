<?php

class Route{

    public  static $ValidRouter = array();

    public static function set($route, $function){
        self::$ValidRouter[] =$route;

        // print_r(self::$ValidRouter);
        // print_r($_SERVER);
        //to send request of exact page requested
        if($_GET['url']== $route){
            $function->__invoke();
        }
    }
}

?>