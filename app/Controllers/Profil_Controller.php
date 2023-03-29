<?php
namespace App\Controllers ;
use App\Models\Home_Login_model;
use App\Models\Profil_model;
class Profil_Controller extends BaseController {
    protected $model_login ;
    protected $model_profil ;
    public function __construct (){
      $this->model_login= new Home_Login_model() ;
      $this->model_profil= new Home_Login_model() ;
    }

    
}