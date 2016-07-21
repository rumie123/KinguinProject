<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\Signup\SignupModel;
use App\Library\Mailer\Mailer;

class SignupController extends Controller
{
     /**
     * @Route('/signup')
     * @Name('signup.index')
     */
    
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
                $data = array(
		"page_title"=>"Signup",
                "page_description"=>"Signup page description",
                "page_keywords"=>"signup, domain name",
                "db"=>array(
                            "level2"=>"Su",
                            "Level3"=>"Sider"
                ),
	);
        
        $app->render('pages/signup.tpl', $data );
        

    }
     /**
     * @Route('/signup2')
     * @Name('post.index')
     * @Method ('post')
     */
    
    public function postAction( )
    {
        /** @var Yee\Yee $yee */
        
        $app = $this->getYee();
        $email = $app->request()->post("email");
        $pass  =  $app->request()->post("pass");
        $passConf = $app->request()->post("passConf");
        $signupModel = new SignupModel ( $email, $pass, $passConf );
        
        if (!$signupModel->validateEmail($email)){
            $error ="Invalid Email";
        }elseif(!$signupModel->checkPass($pass, $passConf)){
            $error ="Please try again,there has been an error.";
        }
        if(!isset($error)){
            $signupModel->register();
            $data = array(
            'activationcode' => $signupModel->activationcode
        );
        $mailer = new Mailer("rumi.radusheva.1104@gmail.com", $email, "mail", $data, "Activate Account");
        $mailer->buildEmail()->sendEmail();          
        $app->render('pages/signup_succes.tpl',array());
        }else{
                $data =array('error' => $error);
                $app->render('pages/signup_error.tpl',$data);
        }
            
        
     
    } 
   
}