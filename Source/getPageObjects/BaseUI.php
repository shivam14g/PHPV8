<?php
class BaseUI extends PHPUnit_Framework_TestCase{
    //put your code here
    protected  static $webDriver;
    protected static $path;
    
     public function __construct($webdriver,$path)
     { 
         self::$webDriver=$webdriver;
         self::$path=$path;
         
         
         
     }
 
    
    

}
