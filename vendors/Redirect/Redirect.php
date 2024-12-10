<?php
class Redirect {
    public static function link($url, $permanent = false)
    {
        header('Location: ' . $url, true, $permanent ? 301 : 302);
        exit();
    }

    public static function refresh()
    {
        header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
        exit();
    }


}