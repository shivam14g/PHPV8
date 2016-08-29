<?php
require_once'source/getPageObjects/getPage.php';

class Action extends getPage {
    //put your code here

    function __construct($webdriver) {
        parent::__construct($webdriver,"Resources/Homepage.spec");
        
    }
    
    
    public function enterTermToSearch($locatorName,$text)
    { 
        $this->EnterText($this->element($locatorName),$text);
        
    }
    
    
}
