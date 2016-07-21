<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\MyAccount\MyAccountModel;

class MyAccountController extends Controller
{
     /**
     * @Route('/account')
     * @Name('account.index')
     */
    public function actionAccount()
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        
        $javascript = array(
            "/js/account.js"
        );
        
        $myAccount = new MyAccountModel();
        $accDetail = $myAccount->getAccountDetails();
        $data = array(
            "javascript" => $javascript,
            'titile' => 'MyAccount',
            'userDetail' => $accDetail 
        );
         
        $app->render('pages/my_account.tpl', $data);    
    }
    
}
