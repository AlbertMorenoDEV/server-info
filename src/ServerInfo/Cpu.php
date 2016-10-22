<?php
namespace ServerInfo;

class Cpu
{
    public function loadAverage()
    {
        return sys_getloadavg();
    }
}