<?php

abstract class BaseTest extends PHPUnit_Framework_TestCase{
   //put your code here
 protected function onNotSuccessfulTest(Exception $e)
    {   
             
    parent::onNotSuccessfulTest($e);
    }
   
    
    
}
