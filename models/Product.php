<?php
class Product {
    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM rooms');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt = null;
    }


    static public function getProduct($data){
        $id = $data['id'];
        try{
            $query = 'SELECT * FROM rooms WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id"=>$id));
            $product= $stmt->fetch(PDO::FETCH_ASSOC);
            return $product;
        }catch(PDOException $ex){
            echo 'error' . $ex->getMessage();
        }
    }

  
    static public function getAllRes(){
            $stmt = DB::connect()->prepare('SELECT * FROM reservation inner join user,rooms WHERE reservation.iduser = user.id AND reservation.idroom = rooms.id ');
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt = null;
        }


    static public function searchAll($data){
        $stmt = DB::connect()->prepare('SELECT rooms.* FROM rooms LEFT JOIN reservation ON rooms.id = reservation.idroom AND (:datedebut BETWEEN reservation.datedebut AND reservation.datefin OR :datefin BETWEEN reservation.datedebut AND reservation.datefin) WHERE reservation.idroom IS NULL AND rooms.type=:type AND rooms.suitetype=:suitetype');

        $stmt->bindParam(':type',$data['type']);
        $stmt->bindParam(':suitetype',$data['suitetype']);
        $stmt->bindParam(':datedebut',$data['datedebut']);
        $stmt->bindParam(':datefin',$data['datefin']);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt = null;
    }


    static public function searchOne($data){
        $stmt = DB::connect()->prepare('SELECT rooms.* FROM rooms LEFT JOIN reservation ON rooms.id = reservation.idroom AND (:datedebut BETWEEN reservation.datedebut AND reservation.datefin OR :datefin BETWEEN reservation.datedebut AND reservation.datefin) WHERE reservation.idroom IS NULL AND rooms.type=:type');

        $stmt->bindParam(':type',$data['type']);
        $stmt->bindParam(':datedebut',$data['datedebut']);
        $stmt->bindParam(':datefin',$data['datefin']);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt = null;
    }


    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO rooms (name,description,capacity,price,type,suitetype,image)VALUES (:name,:description,:capacity,:price,:type,:suitetype,:image)');
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':description',$data['description']);
        $stmt->bindParam(':capacity',$data['capacity']);
        $stmt->bindParam(':price',$data['price']);
        $stmt->bindParam(':type',$data['type']);
        $stmt->bindParam(':suitetype',$data['suitetype']);
        $stmt->bindParam(':image',$data['image']);
                
        if($stmt->execute()){
            return 'ok';
        } else {
            return 'error';
        }
        $stmt=null;
    }

    static public function addRes($data){
        $stmt = DB::connect()->prepare('INSERT INTO reservation (datedebut,datefin,idroom,iduser,guestnumber)VALUES (:datedebut,:datefin,:idroom,:iduser,:capacity)');
        $stmt->bindParam(':datedebut',$data['datedebut']);
        $stmt->bindParam(':datefin',$data['datefin']);
        $stmt->bindParam(':idroom',$data['idroom']);
        $stmt->bindParam(':iduser',$data['iduser']);
        $stmt->bindParam(':capacity',$data['guestnumber']);
       
        if($stmt->execute()){
            return 'ok';
        } else {
            return 'error';
        }
        $stmt=null;
    }
    static public function addResv($data){
        $stmt = DB::connect()->prepare('INSERT INTO reservation (datedebut,datefin,idroom,iduser,guestnumber)VALUES (:datedebut,:datefin,:idroom,:iduser,:guestnumber)');
        $stmt->bindParam(':datedebut',$data['datedebut']);
        $stmt->bindParam(':datefin',$data['datefin']);
        $stmt->bindParam(':idroom',$data['idroom']);
        $stmt->bindParam(':iduser',$data['iduser']);
        $stmt->bindParam(':guestnumber',$data['guestnumber']);
       
        if($stmt->execute()){
            return 'ok';
        } else {
            return 'error';
        }
        $stmt=null;
    }

    static public function addGes($datages){
        $stmt = DB::connect()->prepare('INSERT INTO guest (fullname,date,idres)VALUES (:fullname,:date,:idres)');
      
        $stmt->bindParam(':fullname',$datages['fullname']);
        $stmt->bindParam(':date',$datages['date']);
        $stmt->bindParam(':idres',$datages['idres']);
       
        if($stmt->execute()){
            return 'ok';
        } else {
            return 'error';
        }
        $stmt=null;
    }

    static public function idRes(){
        $stmt = DB::connect()->prepare('SELECT MAX(id) AS ID FROM reservation');
        $stmt->execute();
        $idres = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $id  =  $idres[0]['ID'];
        return $id;
        $stmt = null;
    }


    static public function add1($data){
        $stmt = DB::connect()->prepare('INSERT INTO rooms (name,description,capacity,price,type,image)VALUES (:name,:description,:capacity,:price,:type,:image)');
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':description',$data['description']);
        $stmt->bindParam(':capacity',$data['capacity']);
        $stmt->bindParam(':price',$data['price']);
        $stmt->bindParam(':type',$data['type']);
        $stmt->bindParam(':image',$data['image']);
                
        if($stmt->execute()){
            return 'ok';
        } else {
            return 'error';
        }
        $stmt=null;
    }




    public static function delete($data){
        $id = $data['id'];
        try{
            $query = 'DELETE FROM rooms WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id"=>$id));
            if($stmt->execute()){
                return 'ok';
            } 
        }catch(PDOException $ex){
            echo 'error' . $ex->getMessage();
        }
    }





    static public function update($data){
        $stmt = DB::connect()->prepare('UPDATE rooms SET name = :name,description = :description,capacity = :capacity,price = :price,type = :type,suitetype = :suitetype,image = :image WHERE id=:id');
        $stmt->bindParam(':id',$data['id']);
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':description',$data['description']);
        $stmt->bindParam(':capacity',$data['capacity']);
        $stmt->bindParam(':price',$data['price']);
        $stmt->bindParam(':type',$data['type']);
        $stmt->bindParam(':suitetype',$data['suitetype']);
        $stmt->bindParam(':image',$data['image']);
        if($stmt->execute()){
            return 'ok';
        } else {
            return 'error';
        }
        $stmt=null;
    }
    static public function update1($data){
        $stmt = DB::connect()->prepare('UPDATE rooms SET name = :name,description = :description,capacity = :capacity,price = :price,type = :type,suitetype = :suitetype WHERE id=:id');
        $stmt->bindParam(':id',$data['id']);
        $stmt->bindParam(':name',$data['name']);
        $stmt->bindParam(':description',$data['description']);
        $stmt->bindParam(':capacity',$data['capacity']);
        $stmt->bindParam(':price',$data['price']);
        $stmt->bindParam(':type',$data['type']);
        $stmt->bindParam(':suitetype',$data['suitetype']);
        
        
        if($stmt->execute()){
            return 'ok';
        } else {
            return 'error';
        }
        $stmt=null;
    }

}
?>