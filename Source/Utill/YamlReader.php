<?php
use Symfony\Component\Yaml\Yaml;

class YamlReader {
    public $Tier;
    public $TestData;
    
    // Constructor sets test data from file and and set tier value 
   function __construct($Tier) {
         $this->Tier=$Tier ;
         $this->TestData=$this->getTestData();
   }
   
   
    //function returns the data from yaml file depending upon which tier is it in config.ini file
    public function getTestData()
   {
    if(strcasecmp($this->Tier,"prod")==0){
        $file_content=  file_get_contents('Tests/TestData/ProdTestData.yml');
        $yamldata= Yaml::parse($file_content);
    }
    
    if(strcasecmp($this->Tier,"QA")==0)
    {
         $file_content=  file_get_contents('Tests/resource/QATestData.yml');
          $yamldata= Yaml::parse($file_content);
        
    }
      
    return $yamldata;
    
    
}

 public function getTestValue($keyofdata)
 {
     return $this->TestData[$keyofdata];
     
     
     
 }



    
    
}
