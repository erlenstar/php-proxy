<?php
include('proxy.php');

//	proxy requests like /proxy/?nexus3.integration.sky/nexus-rest-api/v1/contacts
$proxy = new Proxy();
$proxy->forward($_SERVER['argv'][0]);
