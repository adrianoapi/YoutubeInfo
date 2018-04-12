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
                'https://i1.ytimg.com/vi/' . $this->token . '/default.jpg ' ;
    }
    
    public function getInfo($type = "json")
    {
        $data = $this->connect($type);
        return $type == "json" ?
                        json_decode($data) :
                        simplexml_load_string($data);
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
    
    private function connect($type)
    {
        $youtube = "https://www.youtube.com/oembed?url={$this->url}&format={$type}";
        $options = array(
            'http' => array(
                'method' => 'GET',
                'header' => "format: UTF-8\r\n"
                . "User-Agent: PHP\r\n"
                . "Connection: Connection: Keep-Alive\r\n"
            )
        );
        $yt_options = stream_context_create($options);
        return file_get_contents($youtube, false, $yt_options);
    }
    
}

# IMPLEMENT
$obj = new YoutubeInfo("https://www.youtube.com/watch?v=VHxjyBtKxpM");
echo "<img src=\"{$obj->getThumb()}\">";
echo "&nbsp;";
echo "<img src=\"{$obj->getThumb('small')}\">";

# INFORMATION
echo "<pre>";
print_r($obj->getInfo());
echo "</pre>";
?>
