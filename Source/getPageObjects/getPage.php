<?php
require_once 'source/getPageObjects/BaseUI.php';
class getPage extends BaseUI{
    //put your code here
    
    
    function __construct($webdriver, $path) {
                parent::__construct($webdriver, $path);
    }


    public function element($Locator)
{ 
    $spec=new SpecFileReader(self::$path);//still needs to put this statement at right place
    
   $array=$spec->getLocator($Locator);
   if(strcasecmp($array[1],'css')==0)
   {
      
    $element = self::$webDriver->findElement(WebDriverBy::cssSelector($array[2]));

   }
  if(strcasecmp($array[1],'xpath')==0)
  {
     
  $element = self::$webDriver->findElement(WebDriverBy::xpath($array[2]));

  }
  if(strcasecmp($array[1],'id')==0)
  {
     
  $element = self::$webDriver->findElement(WebDriverBy::id($array[2]));

  }
  if(strcasecmp($array[1],'class')==0)
  {
     
  $element = self::$webDriver->findElement(WebDriverBy::className($array[2]));

  }if(strcasecmp($array[1],'Tag')==0)
  {
     
  $element = self::$webDriver->findElement(WebDriverBy::tagName($array[2]));

  }
  if(strcasecmp($array[1],'link Text')==0)
  {
     
  $element = self::$webDriver->findElement(WebDriverBy::linkText($array[2]));

  }
  if(strcasecmp($array[1],'partial link Text')==0)
  {
     
  $element = self::$webDriver->findElement(WebDriverBy::partialLinkText($array[2]));

  }


return $element;



}
public function elements($Locator)
{
   $spec=new SpecFileReader('Source/Homepage.repo');    
   $array=$spec->getLocator($Locator);
   if(strcasecmp($array[1],'class')==0)
  {
     
  $elements = self::$webDriver->findElements(WebDriverBy::className($array[2]));

  }if(strcasecmp($array[1],'Tag')==0)
  {
     
  $elements = self::$webDriver->findElements(WebDriverBy::tagName($array[2]));
  
  }
  
return $elements;  
    
}



//function for clicking any element which is passsed as parameter

public function click($webElement)
{
    // need to add  wait for element
    $webElement->click();
    
   
}

public function EnterText($webElement,$text)
{
    $webElement->sendKeys($text);
    
    
}

public function reload()
{
    self::$webDriver->navigate()->refresh();
    
    
}







}
