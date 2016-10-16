<?php

namespace ServerInfo;

class ServerInfo
{
    public static function disk_total_space($directory = "/")
    {
        return disk_total_space($directory);
    }

    public static function disk_free_space($directory = "/")
    {
        return disk_free_space($directory);
    }
}