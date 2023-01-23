<?php
session_start();
class product extends Controller
{
  private $postModel;

  public function __construct()
  {

    $this->postModel = $this->model('productM');
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
  

  public function edit()
  {
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
      $prix = $_POST['prix'];
      $libelle = $_POST['libelle'];
      $category = $_POST['category'];
      $name = $_POST['name'];
      $FileName = $_FILES['imageadd']['name'];
      $imageEx = explode('.', $FileName);
      $imageEx = strtolower(end($imageEx));
      $newImageName = uniqid();
      $newImageName .= '.' . $imageEx;
      move_uploaded_file($_FILES['imageadd']['tmp_name'], '../public/imgg/' . $newImageName);
      $bol = $product->addprudct($category, $newImageName, $name, $prix,$libelle);
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
            $bol = $product->updateproduct($id_proudct, $category, $name, $prix);
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
        $FileName = htmlspecialchars($_FILES['imageadd']['name']);
        $imageEx = explode('.', $FileName);
        $imageEx = strtolower(end($imageEx));
        $newImageName = uniqid();
        $newImageName .= '.' . $imageEx;
        move_uploaded_file($_FILES['imageadd']['tmp_name'], '../public/imgg/' . $newImageName);
        $bol = $product->updateproduct($id_proudct, $category, $name, $prix, $newImageName);

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

