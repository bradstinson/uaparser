<?php

class UserAgent {

    protected static $ua = '';       


    /**
     * Parse User-Agent    
     * @return void
     */   
    protected static function _parse($name)
    {
        if(! self::$ua) {
            self::$ua = UA_UA::parse();
        }
    }

    /**
     * Returns property, if found   
     * @return boolean
     */
    protected static function _ua_property($property=''){
        self::_parse(); 
        return self::$ua->{$property};        
    }


    /**
     * Direct function calls to _ua_property()    
     */   
    public static function __callStatic($method, $arguments) 
    {
        return self::_ua_property($method);
    }                   
}