<?php


class Screenshot {
    //put your code here
   private $path; 
    function __construct($path) {
        $this->path=$path;
    }
    
    
    public function takeScreenShot($name='image.png')
    {
        $im = imagegrabscreen();
        imagepng($im, $this->path."\\".$name);
        imagedestroy($im); 
        
        
    }
    
}
