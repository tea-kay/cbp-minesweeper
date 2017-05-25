<?php
//REQUEST CLASS
class REQUEST
{
    public static function get($name, $default = null) 
    {
        if(array_key_exists($name, $_REQUEST)) 
        {
            return $_REQUEST[$name];
        }
        else 
        {
            return $default;
        }
    }
}
?>