<?php


class YoutubeInfo {
    
    private $url;
    private $token;
    
    public function __construct($url = NULL)
    {
        $this->url = $url;
        $this->token = $this->setToken();
    }
    
    public function setUrl($url = NULL)
    {
        $this->url = $url;
    }
    
    /* Get Thumb video youtube */
    public function getThumb()
    {
        return 'https://i.ytimg.com/vi/'. $this->token .'/hqdefault.jpg';
    }
    
    public function setToken()
    {
        $array = explode("=", $this->url);
        return $array[1];
    }
    
}

# IMPLEMENTAR
$obj = new YoutubeInfo("https://www.youtube.com/watch?v=VHxjyBtKxpM");
echo "<img src=\"{$obj->getThumb()}\">";
?>
