<?php
/**
 * BlackBE.php
 * 文件描述
 * Created on 2020/8/20 12:34
 * Created by LixWorth
 */

if(!extension_loaded("curl")){
    throw new \Exception("请安装curl扩展");
}

class BlackBE
{
    private $api = "http://api.blackbe.xyz:8890";
    private $uuid;
    private $secret;

    public function __construct($uuid = null,$secret = null){
        $this->uuid = $uuid;
        $this->secret = $secret;
    }

}

new BlackBE();