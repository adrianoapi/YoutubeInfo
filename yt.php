<?php


class YoutubeInfo {
    
    private $url;
    private $token;
    
    public function __construct($url = NULL)
    {
        $this->setUrl($url);
        $this->setToken();
    }
    
    public function getThumb()
    {
        return 'https://i.ytimg.com/vi/'. $this->token .'/hqdefault.jpg';
    }
    
    public function getUrl()
    {
        return $this->url;
    }
    
    private function setUrl($url)
    {
        $this->url = $url;
    }
    
    public function getToken()
    {
        return $this->token;
    }
    
    private function setToken()
    {
        $array = explode("=", $this->url);
        $this->token = $array[1];
    }
    
}

# IMPLEMENTAR
$obj = new YoutubeInfo("https://www.youtube.com/watch?v=VHxjyBtKxpM");
echo "<img src=\"{$obj->getThumb()}\">";
?>
