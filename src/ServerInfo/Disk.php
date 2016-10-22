<?php
namespace ServerInfo;

class Disk
{
    private $path;

    public function __construct($path = "/")
    {
        $this->path = $path;
    }

    public function totalSpace()
    {
        return disk_total_space($this->path);
    }

    public function freeSpace()
    {
        return disk_free_space($this->path);
    }
}