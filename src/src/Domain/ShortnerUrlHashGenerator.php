<?php

namespace App\Domain;

class ShortnerUrlHashGenerator
{
    public function build(String $url) : String
    {
        return substr(sha1($url),0,6);
    }
}