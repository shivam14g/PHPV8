<?php


require_once 'Source/Automation/WebDriverFactory.php';
require_once 'Source/getPageObjects/BaseUI.php';

class TestInitiator {
    //put your code here
    
    protected $webDriverFactory=null;
    protected $driver;
    protected  $config;
    public  $homepage;
    
   
    
       function __construct ()
    {
         $this->webDriverFactory=new WebDriverFactory(); 
         $this->setConfig('config.ini');
         $this->configureBrowser();
         $this->initPage();
        
    }
    
    
        public  function setConfig($pathToFile)
    {
        $this->config=parse_ini_file($pathToFile,true);
      
    }
        
   private function configureBrowser()
   { 
        
        
        $this->driver=$this->webDriverFactory->getBrowser($this->config);
       
       
   }    
    
    
     public function initPage()
    {
        //All Page Objects Should be Initialized here 
        $this->homepage=new HomepageAction($this->driver);
        
    }
    public function LaunchPage()
    {
        $this->driver->get("https://www.google.com");
        
        
    }
    
 
}
