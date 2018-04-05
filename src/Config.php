<?php

namespace tsoffer\wechat;

class Config
{
    private $version = '0.1';

    public static function getVersion()
    {
        return self::$version;
    }
}