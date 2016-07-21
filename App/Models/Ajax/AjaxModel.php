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
    
    public function Validate(){
        $app = \Yee\Yee::getInstance();
       
        $app->db['default']->where("username", $this->loginEmail);
        $app->db['default']->where("password", $this->loginPassword);
        $app->db['default']->where("active", 1);
        $data = $app->db['default']->getOne('users');
          
     if( $data == NULL )
     {
         return false;
     }
     return $data;   
     }
}