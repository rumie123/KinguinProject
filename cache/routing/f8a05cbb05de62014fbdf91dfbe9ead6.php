<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-18 01:22:08
 */

$app = Yee\Yee::getInstance();

$app->map("/ajax/login", "AjaxController::___LogInAjaxAction")->via("POST")->name("ajaxlogin.index");

