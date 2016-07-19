<?php

namespace App\Models\Ajax;

class AjaxModel 
{
    private $loginEmail;
    private $loginPassword;
   
    
    public function __construct($email, $pass) {
       $app = \Yee\Yee::getInstance();
       $this->loginEmail = $email;
       $this->loginPassword = $pass;
             
    }
    
    public function User()
    {
        $app = \Yee\Yee::getInstance();
        return $app->db['default']->where("username", $this->loginEmail)
                ->getOne('users');
    }
     
    public function CheckIfEmailExists()
    {
        //return 1;
        $app = \Yee\Yee::getInstance();
        $ifUserExist = $this->User();
        if($ifUserExist <> NULL) {
            return true;
        } else {
            return false; 
        }
    }
    
    public function CheckPassword()
    {
        $app = \Yee\Yee::getInstance();
        
        if($this->CheckIfEmailExists()) {
            $user = $this->User();
            if($this->loginPassword == $user['password']) {
                return true;
            }
            return false;
        }
    }
    
    public function IsUserActive() 
    {
    $app = \Yee\Yee::getInstance();
    
    $checkUserActive = $this->User();
    if($checkUserActive['active']==1)
     {
        return true;
     } return false;
  
    
    }
    
    public function Validate()
    {
     if($this->CheckIfEmailExists() && $this->CheckPassword())
     {
         return true;
     }
     return false;
        
    }
}