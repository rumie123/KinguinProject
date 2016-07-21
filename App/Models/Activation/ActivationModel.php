<?php

namespace App\Models\Activation;

class ActivationModel
{
    private $accode;
   
    public function __construct($accode)
    {
        $this->accode = $accode;
    }
    public function checkIfAcCodeExist()
    {
        $app = \Yee\Yee::getInstance();
        
        $app->db['default']->where('activationCode',$this->accode);
        $app->db['default']->where('active', 0);
        
        $return = $app->db['default']->getOne('users');
        
    if(NULL == $return)
    {
        return false;
    }
        return $return;
    }
    public function activateUser($userData)
    {
        $app = \Yee\Yee::getInstance();
        
    $data =[
         'activationCode'=>'',
         'active'=>1
    ];
    
    $app->db['default']->where('username',$userData['username']);
    $app->db['default']->update ('users', $data );        
    }
}
