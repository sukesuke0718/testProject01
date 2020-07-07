<?php
namespace App\Controller;

use App\Controller\AppController;

class SampleController extends AppController
{
   public function index($name = '', $age = '')
   {

      $this->autoRender = false;
      echo "<html><head><title>Sample Page</title></head>";
      echo "<body><p>CakePHP</p>";

      if($name == '' || $age == ''){

         $this->setAction('error');

      }else{

         echo "<p>".$name ."</p>";
         echo "<p>" .$age ."</p>";
         echo "</html>";

      }

    }

      public function error(){

         $this->autoRender = false;

         echo "<html><head>Error!</head>";
         echo "<body><p></p></body>";

      }


}

?>
