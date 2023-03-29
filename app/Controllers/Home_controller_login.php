<?php
namespace App\Controllers;

use App\Models\Home_Login_model;

class Home_controller_login extends BaseController{   
    protected $model;
    public function  __construct(){  
    $this->model = new Home_Login_model();
    }
    public function register (){
        
         // Sanitize input data
        $postData = $this->request->getPost([
            'nom',
            'password',
            'siege',
            'addressexploitation',
            'nomdirigeant',
            'debutexercice',
        ]);
        $necessarry =  [
            'nom'=> 'required',
            'password'=> 'required',
            'siege'=> 'required',
            'addressexploitation'=> 'required',
            'nomdirigeant'=> 'required',
            'debutexercice'=> 'required',
        ];
        if (!$this->validate($necessarry)) {
            return redirect()->to(site_url('/'));
        }           
        $this->model->insert($postData) ;
        session()->set($postData) ;
        
        

    } 
    public function login (){
      $postData = $this->request->getPost(['nom','password']);
      $user = $this->model->where('nom', $postData['nom'])->where('password', $postData['password'])->first();
      if (!$user) {
        return redirect()->to(site_url('/'));
      }
      session()->set($postData) ;
      return redirect()->to('home');
    }
}
