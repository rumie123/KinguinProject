<?php

namespace App\Models\Signup;

class SignupModel
{
    private $email;
    private $pass;
    private $passConf;
    public  $activationcode;
    
    public function __construct($e,$p,$pc) 
    {
      $this->email=$e;
      $this->pass=$p;
      $this->passConf=$pc;
    }
    public function validateEmail($email)
    {
        $email = trim($email);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false)
        {
            return true;
            
        }
        else
        {
            return false;
        }
        
    }
    public function checkPass($password1,$password2 )
    {
        $pass = trim($password1);
        $passConf = trim($password2);
        $len = strlen($pass);
        $patter = "/[a-zA-Z0-9]/";
       
        if($len > 5 && $len < 21)
        {
            if (preg_match($patter,$pass)) 
            {
                if ($pass == $passConf)
                    {
                    return true;
                    }
            }
        }
        return false;
    }
    
    public function checkDB()
    {
        $app=\Yee\Yee::getInstance();
        $app->db['default']->where ("username",$this->email);
        $data = $app->db['default']->getOne('users'); 
        
        if( $data == NULL)
        {
            
            return false;
        }
            return true;
    }
    
    public function register()
    {
        $app=  \Yee\Yee::getInstance();
        $db= $app->db['default'];
        
        $this->activationcode = $this->activationCode();
        
        $db->insert("users",  array(
                                    "username"=> $this->email,
                                    "password"=> $this->pass,
                                    "active"=>0,
                                    "signupdate"=> date("Y-m-d H:i:s"),
                                    "activationcode" => $this->activationcode 
                                    
            ));
    }
    
     public function activationCode()
     {
      
         return md5( $this->email );         
      
     }
    
}




