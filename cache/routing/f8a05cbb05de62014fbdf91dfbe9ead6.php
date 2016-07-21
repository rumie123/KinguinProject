<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-21 04:07:14
 */

$app = Yee\Yee::getInstance();

$app->map("/ajax/login", "AjaxController::___logInAjaxAction")->via("POST")->name("ajaxlogin.index");
$app->map("/ajax/updateMyAccount", "AjaxController::___postUpdateMyAccount")->via("POST")->name("");

