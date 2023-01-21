<?php
  class productM extends Database {
    private $db;

    public function __construct(){
       $this->db = new Database;
    }


    public function getallprodact (){
      $qury="SELECT * FROM `categorie` ,prodcts WHERE categorie.id_c=prodcts.id_category";
      $stmt= $this->db->query($qury);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getoneprodct($id){
      $qury="SELECT * FROM `categorie` ,prodcts WHERE categorie.id_c=prodcts.id_category and id_prodct=$id ";
      $stmt= $this->db->query($qury);
      $stmt->execute();
      if($stmt->rowCount()>0){
        return $stmt->fetchAll(PDO::FETCH_OBJ);
      }
      else{
        return false ;
      }
     
    }

  
    public function deleteproudct($id){

          $stmt= $this->db->query("DELETE  FROM prodcts where id_prodct =$id ");
          $stmt->execute();
        if($stmt->rowCount()>0){
          return true;
        }
        else return false;
    }

      
    public function addprudct($id_category,$image,$name ,$prix ){

          $sql= "INSERT INTO `prodcts`(`prix`, `image`, `name`, `id_category`) VALUES (:prix,:image,:name,:id_category)";
            $stmt=$this->db->query($sql);
            $stmt->bindValue(':image',$image,PDO::PARAM_STR);
            $stmt->bindValue(':id_category',$id_category,PDO::PARAM_INT);
            $stmt->bindValue(':name',$name,PDO::PARAM_STR);
            $stmt->bindValue(':prix',$prix,PDO::PARAM_STR); 
            $stmt->execute();
          
            if ($stmt->rowCount() > 0) {
            return true;
          } else {
              return false;
          }
    
    }

    public  function updateproduct($id_product,$id_category,$name,$prix,$image=null){
 

      if($image==null){
        $stmt= $this->db->query("UPDATE `prodcts` SET prix=:prix,name=:name,id_category=:id_category WHERE id_prodct=:id_prodct");
        $stmt->bindValue(':id_prodct',$id_product,PDO::PARAM_INT);
        $stmt->bindValue(':prix',$prix,PDO::PARAM_STR);
        $stmt->bindValue(':name',$name,PDO::PARAM_STR);
        $stmt->bindValue(':id_category',$id_category,PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
         return true;
       } else {
           return false;
       }

      }
      else{
        $stmt= $this->db->query("UPDATE `prodcts` SET prix=:prix,image=:image,name=:name,id_category=:id_category WHERE id_prodct=:id_prodct");
        $stmt->bindValue(':id_prodct',$id_product,PDO::PARAM_INT);
        $stmt->bindValue(':prix',$prix,PDO::PARAM_STR);
        $stmt->bindValue(':image',$image,PDO::PARAM_STR);
        $stmt->bindValue(':name',$name,PDO::PARAM_STR);
        $stmt->bindValue(':id_category',$id_category,PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
         return true;
       } else {
           return false;
       }
      }
    }

  }