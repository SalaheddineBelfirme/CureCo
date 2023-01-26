<?php
  class productM extends Database {
    private $db;

    public function __construct(){
       $this->db = new Database;
    }

    public function trie( $by, $order )
    {
        $sql = 'SELECT * FROM `categorie` ,prodcts WHERE categorie.id_c=prodcts.id_category ORDER BY prodcts.' . $by . ' ' . $order;
        $stmt= $this->db->query($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function getallprodact ($limit=null){
      $qury="SELECT * FROM `categorie` ,prodcts WHERE categorie.id_c=prodcts.id_category";
      if($limit!=null){
        $qury=sprintf("SELECT * FROM `categorie` ,prodcts WHERE categorie.id_c=prodcts.id_category %s",$limit);
      }
      $stmt= $this->db->query($qury);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    // public function getallprodactHome (){
    //   $qury="SELECT * FROM `categorie` ,prodcts WHERE categorie.id_c=prodcts.id_category LIMIT 3";
    //   $stmt= $this->db->query($qury);
    //   $stmt->execute();
    //   return $stmt->fetchAll(PDO::FETCH_OBJ);
    // }

    public function totalprix (){
      $qury="SELECT SUM(prix) FROM `prodcts`";
      $stmt= $this->db->query($qury);
      $stmt->execute();
      $prix=$stmt->fetchColumn();
      return $prix;
    }
    public function maxprix (){
      $qury="SELECT MAX(prix) FROM `prodcts`";
      $stmt= $this->db->query($qury);
      $stmt->execute();
      $prix=$stmt->fetchColumn();
      return $prix;
    }
    public function minprix (){
      $qury="SELECT MIN(prix) FROM `prodcts`";
      $stmt= $this->db->query($qury);
      $stmt->execute();
      $prix=$stmt->fetchColumn();
      return $prix;
    }
    public function NbProudct (){
      $qury="SELECT COUNT(*) FROM `prodcts`";
      $stmt= $this->db->query($qury);
      $stmt->execute();
      $prix=$stmt->fetchColumn();
      return $prix;
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
    public function rechrechproudct($words){

      $stmt= $this->db->query("SELECT * FROM `categorie` ,prodcts WHERE categorie.id_c=prodcts.id_category and prodcts.libelle like '%$words%'");
      $stmt->execute();
     
      return $stmt->fetchAll(PDO::FETCH_OBJ);
}
      
    public function addprudct($id_category,$image,$name ,$prix,$libelle ){
      $date= date("Y/m/d") ;

          $sql= "INSERT INTO `prodcts`(`prix`, `image`, `name`, `id_category`,`date_dajout`,`libelle`) VALUES (:prix,:image,:name,:id_category,:date_dajout,:libelle)";
            $stmt=$this->db->query($sql);
            $stmt->bindValue(':image',$image,PDO::PARAM_STR);
            $stmt->bindValue(':id_category',$id_category,PDO::PARAM_INT);
            $stmt->bindValue(':name',$name,PDO::PARAM_STR);
            $stmt->bindValue(':prix',$prix,PDO::PARAM_STR); 
            $stmt->bindValue(':date_dajout',$date,PDO::PARAM_STR); 
            $stmt->bindValue(':libelle',$libelle,PDO::PARAM_STR); 
            $stmt->execute();
          
            if ($stmt->rowCount() > 0) {
            return true;
          } else {
              return false;
          }
    
    }

    public  function updateproduct($id_product,$id_category,$name,$libelle,$prix,$image=null){
 

      if($image==null){
        $stmt= $this->db->query("UPDATE `prodcts` SET prix=:prix,libelle=:libelle,name=:name,id_category=:id_category WHERE id_prodct=:id_prodct");
        $stmt->bindValue(':id_prodct',$id_product,PDO::PARAM_INT);
        $stmt->bindValue(':prix',$prix,PDO::PARAM_STR);
        $stmt->bindValue(':name',$name,PDO::PARAM_STR);
        $stmt->bindValue(':libelle',$libelle,PDO::PARAM_STR);
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