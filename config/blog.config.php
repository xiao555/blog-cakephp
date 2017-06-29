<?php
/**
 * Created by PhpStorm.
 * User: xiao555
 * Date: 2017/6/26
 * Time: 下午11:04
 */

define('BASE_URL', 'http://localhost:8766');
define('SITE_TITLE', 'Blog');
define('SITE_DESCRIPTION', 'A blogging application written in CakePHP');

function nav_active_array($requestUri=array())
{
    $routing_uri = $_SERVER['REQUEST_URI'];
    if ($routing_uri == '/admin' && $requestUri[0] == 'dashboard')  {
        echo 'class="active"';
        return;
    }
    foreach($requestUri as $ruri) {
        if (strpos($routing_uri, $ruri) !== FALSE)
            echo 'class="active"';
    }
}
