<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class WebDriverFactory 
{
 // public  $browser=null;
   
   public function getBrowser($Browser)
   {
         
       
       if(strcasecmp($Browser['browser'],'chrome')==0)
       { 
         
           return $this->getChromeDriver();
     
       }
       
         if(strcasecmp($Browser['browser'],'firefox')==0)
       { 
         
           return $this->getFirefoxDriver();
     
       }
       
   }
   
   public function getChromeDriver()
   {
         $capabilities = array(\WebDriverCapabilityType::BROWSER_NAME =>'chrome');
        $webDriver = RemoteWebDriver::create('http://localhost:4444/wd/hub', $capabilities);
           
           return $webDriver;
       
       
   }
     public function getFirefoxDriver()
   {
         $capabilities = array(\WebDriverCapabilityType::BROWSER_NAME =>'firefox');
        $webDriver = RemoteWebDriver::create('http://localhost:4444/wd/hub', $capabilities);
           
           return $webDriver;
       
       
   }
   
   
 
    
}

