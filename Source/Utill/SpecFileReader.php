<?php
class SpecFileReader {
    //put your code here
    public $file_path;
    
   function __construct($file_path) {
       $this->file_path=$file_path;
   }
      public function getLocator($locatorName){
    $file=fopen($this->file_path,"r+") or exit("Unable to open the file!");
     while(!feof($file)){

    $line=fgets($file);
   $condition1=(preg_match('/=============/',$line));
   $condition2=(preg_match('/start of file/',$line));
   $condition3=(preg_match('/end of file/',$line));

   if((!$condition3)&&(!$condition2)&&(!$condition1)){
    
           
   if(preg_match("/$locatorName/",$line)){
      $array=preg_split('/\s+/',$line,3);
      return $array;
     }
   }

   
   }
 


}


}



