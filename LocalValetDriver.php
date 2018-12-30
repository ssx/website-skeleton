<?php

class LocalValetDriver extends LaravelValetDriver
{
    public function serves($sitePath, $siteName, $uri)
    {
        return true;
    }

    public function isStaticFile($sitePath, $siteName, $uri)
    {
        if (strpos($uri, '.') === false) {
            return $sitePath.'/public/'.$uri.'/index.html';
        }

        return $sitePath.'/public/'.$uri;
    }

    public function frontControllerPath($sitePath, $siteName, $uri)
    {
        return $sitePath.'/public/index.html';
    }
}
