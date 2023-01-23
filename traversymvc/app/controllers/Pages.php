<?php
session_start();
  class Pages extends Controller {
    private $postModel;
    private $category;
  
  
    
    public function __construct(){
      $this->postModel = $this->model('productM');
     $this->category=$this->model('categorieM');
    }
    
    
   
   static public function  test(){
    
          if(isset($_SESSION['log'])  && $_SESSION['log']<>false){
            if( ($_SESSION['log'][0]->role==1 ) ){
              return "block";
            }
            
          }
          else {
            return "none";
          }
  }


  static public function  testlog(){
      if(isset($_SESSION['log']) && $_SESSION['log']<>false ){
        if( ($_SESSION['log'][0]->role==1 ) ){
  
          return "logout";
        }
        
      }
      else {
        return "login";
      }
      
  }

    public function index(){
      $data = [
        'title' => 'Welcome'
      ];
     
      $this->view('pages/index', $data);
    }
    public function home(){
      $data = [
        'title' => 'home Us'
      ];

      $this->view('pages/home', $data);
    }

  
    
    
    public function login(){
      $data = [
        'title' => 'login Us'
      ];

      $this->view('pages/login', $data);
    }

    public function logout(){
      session_destroy();
      $this->view('pages/login');
    }

    public function signin(){
      $data = [
        'title' => 'signin Us'
      ];

      $this->view('pages/signin', $data);
    }

    public function contact(){
      $data = [
        'title' => 'contact'
      ];

      $this->view('pages/contact', $data);
    }

 

  



 

    public function dashboard(){
     if(isset($_SESSION['log'])){
      if( ($_SESSION['log'][0]->role==1 ) ){
        $product=$this->postModel->getallprodact();
        $category=$this->category->getcategory();
       
        // $datanavier= $this->navire->getnavier();
        // $dataPort=$this->Port->getPORT();
   
       

        $data = [
          'product' => $product,
          'categorie'=> $category,
       
        ];
        $this->view('pages/dashboard', $data);
       }
     }
   

     else{
      header("Location: http://localhost/CureCoj/traversymvc/pages/login");

     }
     
    }

  }


  