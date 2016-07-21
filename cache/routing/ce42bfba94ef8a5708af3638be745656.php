<?php


/**
 * Generated with RoutingCacheManager
 *
 * on 2016-07-20 01:39:07
 */

$app = Yee\Yee::getInstance();

$app->map("/activation/:accode", "ActivationController::___activationAction")->via("GET")->name("activation.index");

