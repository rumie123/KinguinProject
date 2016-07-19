<?php

 use Yee\Managers\Controller\Controller;
 use Yee\Managers\CacheManager;
 use App\Library\Mailer\Mailer;
 
 class TestController extends Controller
 {
     /**
      * @Route ('/test')
      * @Name('test.index')
      */
     public function testAction()
     {
      $app = $this->getYee(); 
      $data = array();
     // $mailer = new Mailer("rumi.radusheva.1104@gmail.com",
      //"rapgirl93@abv.bg", "mail", $data, "Activate Acc");
      
     // $mailer->buildEmail()->sendEmail(); 
     }
     
    
     
 }

