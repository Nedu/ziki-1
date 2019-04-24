<?php

class Controller {

    public static function CreatedView($viewName){
        require_once("./Views/$viewName.php");
        // require_once("./resources/themes/ghost/templates/$viewName.html");
    }

}

?>