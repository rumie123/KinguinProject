<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;

class LogOutController extends Controller
{
     /**
     * @Route('/logout')
     * @Name('logout.action')
     */
    public function logoutAction() {
        $app = $this->getYee();
        /** @var Yee\Yee $yee */
        session_destroy();
        $app->redirect('/');
        
    }
}