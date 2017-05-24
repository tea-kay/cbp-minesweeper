<?php

// request class 
class request
{
    public static function get($name, $default = null)
    {
        // if (isset($_REQUEST['$name'])) { 
        //     return $_REQUEST[$name];
        // } else {
        //     $default;
        // }
        
        return array_key_exists($name, $_REQUEST) ? $_REQUEST[$name] : $default;
    }
}

?>