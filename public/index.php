<?php
/**
 * Created by PhpStorm.
 * User: tourneau1
 * Date: 2016/4/24
 * Time: 18:33
 */

define('APP_PATH',  realpath('.'));
$app  = new Yaf_Application(APP_PATH . "/conf/application.ini");
$app->run();