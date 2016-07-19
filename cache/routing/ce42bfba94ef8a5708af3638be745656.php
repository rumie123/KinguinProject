<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-15 11:19:28
 */

$app = Yee\Yee::getInstance();

$app->map("/activation/:accode", "ActivationController::___activationAction")->via("GET")->name("activation.index");

