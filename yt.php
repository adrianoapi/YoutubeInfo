<?php


class YoutubeInfo {
    
    private $url;
    
    public function setUrl($url = NULL)
    {
        $this->url = $url;
    }
    
    /* Get Thumb video youtube */
    public function getThumb()
    {
        
    }
    
    public function getToken()
    {
        $array = explode("=", $this->url);
        return $array[1];
    }
    
}

# IMPLEMENTAR
$obj = new YoutubeInfo();
$obj->setUrl("https://www.youtube.com/watch?v=VHxjyBtKxpM");
var_dump($obj->getToken());
?>
