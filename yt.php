<?php

#https://www.youtube.com/watch?v=VHxjyBtKxpM
class YoutubeInfo {
    
    private $url;
    private $token;
    
    public function __construct($url = NULL)
    {
        
        if(!$url){
            throw new Exception('Set a video address');
        }
        
        try {
            $this->setUrl($url);
            $this->setToken();
        } catch (Exception $e) {
            echo 'Erro: ',  $e->getMessage(), "\n";
        }
        
    }
    
    public function getThumb($size = "big")
    {
        return $size == "big" ?
                'https://i.ytimg.com/vi/'  . $this->token .'/hqdefault.jpg' :
                'https://i1.ytimg.com/vi/' . $this->token . '/default.jpg ';
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
echo "<img src=\"{$obj->getThumb('small')}\">";

?>
