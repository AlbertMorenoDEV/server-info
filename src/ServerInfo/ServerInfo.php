<?php

namespace ServerInfo;

class ServerInfo
{
    public static function disk_free_space($directory = "/")
    {
        return disk_free_space($directory);
    }
}