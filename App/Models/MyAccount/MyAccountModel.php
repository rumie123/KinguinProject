<?php
namespace App\Models\MyAccount;

class MyAccountModel
{
    public function __construct() {
    }
    
    public function getAccountDetails() {
        $app = \Yee\Yee::getInstance();
        $data = $app->db['default']->where("username", $_SESSION['username'])->getOne("users");
        return $data; 
    }
    
    public function validatePassword($password1, $password2) { 
        $pass = trim($password1);
        $passConf = trim($password2);
        $len = strlen($pass);
        $patter = "/[a-zA-Z0-9]/";
        if($len > 5 && $len < 21){
            if (preg_match($patter,$pass)){
                if ($pass == $passConf){
                    return true;
                    }
               }
           }
        return false;    
    }
    
    public function updateDetails($uname, $fname, $lname, $pass) {
        $app = \Yee\Yee::getInstance();
        
        $data = array(
            "first_name" => $fname,
            "last_name"  => $lname,
        );
        
        if($pass != ''){
            $data['password'] = $pass;
        }
        
        if($app->db['default']->where('username', $uname)->update('users', $data)){
            return true;
        }
        
        return false;
    }
     
}


