<?php
class categorie extends Controller {
  private $postModel;
    public function __construct(){
        $this->postModel = $this->model('categorieM');
      }


    public function add_categorie(){
      if(isset($_POST['sub_addport'])){
        $ct=new categorieM();
        $name=$_POST['namecategorie'];
   
        $bol= $ct->addcategory($name);
          if($bol >0){
            header("Location: http://localhost/CureCoj/traversymvc/pages/dashboard");
          }
          else return $bol;

      }

    
    }

    public function getcategorie(){
      $ct=new categorieM();
    $data= $ct->getcategory();
     header('Content-type: application/json');
     echo  json_encode($data);  

    }
  

  public function deletecategorie($id){
    $cate=new categorieM();
    $pr=$cate->deletecategory($id);
    if($cate==true){
      $_SESSION['deletecatgoryt']=true;
      header("Location: http://localhost/CureCoj/traversymvc/pages/dashboard");
    }
    else{
      $_SESSION['deletecategory']=false;
    }
  
  }

}
 ?>