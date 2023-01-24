<?php
// session_start();
class product extends Controller
{
  private $postModel;
private $category;
  public function __construct()
  {

    $this->postModel = $this->model('productM');
    $this->category=$this->model('categorieM');
  }

  public function trie($by, $order){
    $product = new productM();  
    $category= $this->category->getcategory();
    $proudcts=$product->trie($by, $order);  
    $data = [
      'product' => $proudcts,
      'categorie'=> $category,
   
    ];
    $this->view('pages/dashboard', $data);

  }

  public function recherchproudct()
  {
    $product = new productM();
    if(isset($_POST['subserch'])){
      $words=$_POST['serch'];
      $category= $this->category->getcategory();
      $proudcts= $product->rechrechproudct($words);
      $data = [
        'product' => $proudcts,
        'categorie'=> $category,
     
      ];
      $this->view('pages/dashboard', $data);
    }

    
  }


  public function getaallprodct()
  {
    $product = new productM();
    $product->getallprodact();
  }

  public function getoneproudct($id)
  {
    $product = new productM();
    $pr = $product->getoneprodct($id);
    header('Content-Type: application/json');
    echo  json_encode($pr);
  }
  
  public function Deleteproudct($id)
  {
    $product = new productM();
    $product->deleteproudct($id);
    if ($product == true) {
      $_SESSION['deletenavier'] = true;
      header("Location: http://localhost/CureCoj/traversymvc/pages/dashboard");
    } else {

      $_SESSION['deletenavier'] = false;
    }
  }

  public function addprudct()
  {
  
    if (isset($_POST['submitadd'])) {
     
      
      $product = new productM();
    for ($i = 0 ; $i < count ($_POST['name']) ; $i++){
      $prix = $_POST['prix'][$i] ;
      $libelle = $_POST['libelle'][$i];
      $category = $_POST['category'][$i];
      $name = $_POST['name'][$i];
      $FileName = $_FILES['imageadd']['name'][$i];
      $imageEx = explode('.', $FileName);
      $imageEx = strtolower(end($imageEx));
      $newImageName = uniqid();
      $newImageName .= '.' . $imageEx;
      move_uploaded_file($_FILES['imageadd']['tmp_name'][$i], '../public/imgg/' . $newImageName);
      $bol = $product->addprudct($category, $newImageName, $name, $prix,$libelle);
    }
      if ($bol == true) {
       
        header("Location: http://localhost/CureCoj/traversymvc/pages/dashboard");
      } else {
     
        echo $bol;
        $_SESSION['erouraddproudct'] = true;
      }
    }
  }

  public function aupdteproduct()
  {
    if (isset($_POST['submitupdate'])) {

          if($_FILES["imageadd"]["error"] == 4) {
            echo "test";
            $product = new productM();
            $id_proudct = htmlspecialchars($_POST['id']) ;
            $prix = htmlspecialchars($_POST['prix']);
            $category = htmlspecialchars($_POST['category']);
            $name =htmlspecialchars( $_POST['name']);
            $libelle =htmlspecialchars( $_POST['libelle']);
            $bol = $product->updateproduct($id_proudct, $category, $name,$libelle,$prix);
            if ($bol == true) {
              header("Location: http://localhost/CureCoj/traversymvc/pages/dashboard");
            } else {

              echo $bol;
              $_SESSION['erourupdateproudct'] = true;
            }
            header("Location: http://localhost/CureCoj/traversymvc/pages/dashboard");
      
      }
    
      
      else {
        $product = new productM();
        $id_proudct =htmlspecialchars( $_POST['id']);
        $prix = htmlentities($_POST['prix']);
        $category = htmlspecialchars($_POST['category']);
        $name = htmlspecialchars($_POST['name']);
        $libelle =htmlspecialchars( $_POST['libelle']);
        $FileName = htmlspecialchars($_FILES['imageadd']['name']);
        $imageEx = explode('.', $FileName);
        $imageEx = strtolower(end($imageEx));
        $newImageName = uniqid();
        $newImageName .= '.' . $imageEx;
        move_uploaded_file($_FILES['imageadd']['tmp_name'], '../public/imgg/' . $newImageName);
        $bol = $product->updateproduct($id_proudct, $category, $name, $prix,$libelle, $newImageName);

        if ($bol == true) {
          header("Location: http://localhost/CureCoj/traversymvc/pages/dashboard");
          } else {
          echo $bol;
          $_SESSION['erourupdateproudct'] = true;
         
        }
      }
        

    }
   
  }
}

