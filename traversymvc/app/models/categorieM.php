<?php class categorieM  {
    private $db;

    public function __construct(){
       $this->db = new Database;
    }

    public function getcategory(){
        $stmt= $this->db->query("SELECT * FROM categorie ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
      
          //return $this->db->resultSet();
    
    }
    public function deletecategory($id){
            $stmt= $this->db->query("DELETE  FROM categorie where id_c =$id ");
            $stmt->execute();
          if($stmt->rowCount()>0){
            return true;
          }
          else return false;
    }

    public function addcategory($name){
        $sql="INSERT INTO `categorie`( `name_categorie`)  VALUES (:name_categorie)";
        $stmt=$this->db->query($sql);
        $stmt->bindValue(':name_categorie',$name,PDO::PARAM_STR);
        var_dump($sql);
        $stmt->execute();
        if ($stmt->rowCount()>0) {
            return true;
         } else {
             return false;
         }


    }


    // public function deleteport ($id){
    //   $sql ="DELETE FROM `port` WHERE id_port=:id";
    //  $stmt= $this->db->query($sql);
    //  $stmt->bindValue(':id',$id,PDO::PARAM_INT);
    // }


  }
