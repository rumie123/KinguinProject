<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\Ajax\AjaxModel;

class AjaxController extends Controller
{
     /**
     * @Route('/ajax/login')
     * @Name('ajaxLogin.index')
     * @Method ('POST')
     */
   
    public function LogInAjaxAction( )
    {
       $app = Yee\Yee::getInstance();
       $url = Yee\Yee::getDefaultSettings();
       
       $loginEmail = $app->request->post('loginEmail');
       $loginPassword = $app->request->post('loginPassword');
       
       $ajax = new AjaxModel( $loginEmail, $loginPassword );
       
       if(!$ajax->validate())
       {
           $error = "Fail to join! Check your email/password.";
       }
       if(isset($error))
       {
           $data = array(
               "title"       => "AjaxControllerFail",
               'errorMessage'=> $error,
               'error'       => true,
               
           );
           echo json_encode($data);
       }else {
           $data = array (
               "title" =>"AjaxControllerSuccw",
               'succ'  =>"Hello $loginEmail",
               'error' =>false,
               'success'=>true,
               
           );
           echo json_encode($data);
       }
        //echo "test";
    }
   
    
}
