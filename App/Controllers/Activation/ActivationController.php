<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\Activation\ActivationModel;

class ActivationController extends Controller
{
     /**
     * @Route('/activation/:accode')
     * @Name('activation.index')
     */
    
    public function activationAction( $accode )
    {
        /** @var Yee\Yee $yee */
     $app = $this->getYee();
     
     $baseUrl = \Yee\Yee::getDefaultSettings();
     $acModel = new ActivationModel($accode);
     
     $userExist= $acModel->checkIfAcCodeExist();
     
    if ( !$userExist )
     {
        $app->redirect('/signup',301);
     }
     $acModel->activateUser ( $userExist );
     $app->redirect('/login');
    }
}
    