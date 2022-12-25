<?php

class Admin{
    public static function login($data){
        $email = $data['email'];
        try{
            $query = 'SELECT * FROM admin WHERE email=:email';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":email"=>$email));
            $admin = $stmt->fetch(PDO::FETCH_OBJ);
            return $admin;
            if($stmt->execute()){
                return 'ok';
            } 
        }catch(PDOException $ex){
            echo 'error' . $ex->getMessage();
        }
    }

    public static function loginuser($data){
        $email = $data['email'];
        try{
            $query = 'SELECT * FROM user WHERE email=:email';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":email"=>$email));
            $admin = $stmt->fetch(PDO::FETCH_OBJ);
            return $admin;
            if($stmt->execute()){
                return 'ok';
            } 
        }catch(PDOException $ex){
            echo 'error' . $ex->getMessage();
        }
    }
    

    public static function creatUser($data){
            $stmt = DB::connect()->prepare('INSERT INTO user (fullname,date,email,password)VALUES (:fullname,:date,:email,:password)');
            $stmt->bindParam(':fullname',$data['fullname']);
            $stmt->bindParam(':date',$data['date']);
            $stmt->bindParam(':email',$data['email']);
            $stmt->bindParam(':password',$data['password']);
                    
            if($stmt->execute()){
                return 'ok';
            } else {
                return 'error';
            }
            $stmt=null;
        }


      
    }

?>