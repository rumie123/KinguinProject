<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\Ajax\AjaxModel;
use App\Models\MyAccount\MyAccountModel;


class AjaxController extends Controller
{
    
     /** 
     * @Route('/ajax/login') 
     * @Name('ajaxLogin.index') 
     * @Method ('POST')
      */
    
    public function logInAjaxAction( )
    {
        $app = Yee\Yee::getInstance();
        $url = Yee\Yee::getDefaultSettings();
       
        $loginEmail = $app->request()->post('username');
        $loginPassword = $app->request()->post('password');
        $ajax = new AjaxModel( $loginEmail, $loginPassword );
        $ret = $ajax->validate();
        $error = "";
       
        if( $ret == false ){
            $error = "Fail to join! Check your email/password."; 
        }
       if( $error != "" ){
            $data = array(
               "title"       => "AjaxControllerFail",
               'errorMessage'=> $error,
               'error'       => true,
            );
            echo json_encode( $data );   
        }else{
            $_SESSION['islogged'] = true;
            $_SESSION['username'] = $loginEmail;
            $data = array (
                "title" =>"AjaxControllerSucc",
                'succ'  =>"Hello $loginEmail",
                'error' =>false,
                'success'=>true,     
           );
           echo json_encode( $data );
       }
    }
  
    
     /**
     * @Route('/ajax/updateMyAccount')
     * @name ('post.updateMyAccount')
     * @Method ('POST')
     */
    
    public function postUpdateMyAccount() {
        $app = $this->getYee();
        $email = $_SESSION['username'];
        $fname = $app->request()->post('firstName');
        $lname = $app->request()->post('lastName');
        $pass = trim($app->request()->post('password'));
        $passConf = trim($app->request()->post('confirmPassword'));
        
        $model = new MyAccountModel();
        
        if (strlen($pass) > 0) {
            if (!$model->validatePassword($pass, $passConf)) {
                $error = "Password don't match or not strong enough";
                $pass = '';
            }
        }
        
        if(!$model->updateDetails($email, $fname, $lname, $pass)){
           $error = "Error updating details. Please try again!";
        }
        
        if(isset($error)) {
            $data = array(
                "message" => $error,
                "error"   => true,
                "success" => false
            );
            echo json_encode( $data );
        } else {
            $data = array(
                "message" => "Successfully updated!",
                "success"  => true
            );
            echo json_encode( $data );
        }
    }
}
