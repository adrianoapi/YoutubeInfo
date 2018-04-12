# YoutubeInfo

## Implementando

![alt text](https://i.ytimg.com/vi/VHxjyBtKxpM/hqdefault.jpg)
![alt text](https://i1.ytimg.com/vi/VHxjyBtKxpM/default.jpg )

$obj = new YoutubeInfo("https://www.youtube.com/watch?v=VHxjyBtKxpM");

$obj->getThumb()        # https://i.ytimg.com/vi/VHxjyBtKxpM/hqdefault.jpg

$obj->getThumb('small') # https://i1.ytimg.com/vi/VHxjyBtKxpM/default.jpg 

 print_r($obj->getInfo());
```html
<pre>stdClass Object
(
    [author_name     ] => Peter Gundry | Composer
    [thumbnail_width ] => 480
    [width           ] => 480
    [type            ] => video
    [provider_url    ] => https://www.youtube.com/
    [height          ] => 270
    [author_url      ] => https://www.youtube.com/user/23Alchemist23
    [thumbnail_url   ] => https://i.ytimg.com/vi/VHxjyBtKxpM/hqdefault.jpg
    [provider_name   ] => YouTube
    [version         ] => 1.0
    [thumbnail_height] => 360
    [title           ] => Nordic/Viking Music - FoÌ?lkvangr
    [html            ] => <iframe width="480" height="270" src="https://www.youtube.com/embed/VHxjyBtKxpM?feature=oembed" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
)
</pre>
```