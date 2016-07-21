<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-21 03:40:17
 */

$app = Yee\Yee::getInstance();

$app->map("/account", "MyAccountController::___actionAccount")->via("GET")->name("account.index");

