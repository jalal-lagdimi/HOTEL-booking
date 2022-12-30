<?php

class ProductController{
    public function getAllProducts(){
        $products = Product::getAll();
        return $products;
    }

    public function getAllReservation(){
        $Res = Product::getAllRes();
        return $Res;
    }


    public function searchAllProducts(){
        if(!empty($_POST['suitetype'])){
            $data =  array(
                'type'=> $_POST['type'],
                'suitetype'=> $_POST['suitetype'],
                'datedebut'=> $_POST['datedebut'],
                'datefin'=> $_POST['datefin'],
            );
            $products = Product::searchAll($data);
            return $products;
        
        }else{
            $data =  array(
                'type'=> $_POST['type'],
                'datedebut'=> $_POST['datedebut'],
                'datefin'=> $_POST['datefin'],
            );  
            $products = Product::searchOne($data);
            return $products;
        }  
    }
   

    public function getOneProduct(){
        if(isset($_POST['id'])){
            $data = array(
           'id' => $_POST['id']
            );
        }
        $product = Product::getProduct($data);
        return $product;
    }


    public function addProduct(){
        if(isset($_POST['submit'])){
            $file_name=$_FILES['file']['name'];
            $file_tmp=$_FILES['file']['tmp_name'];
            $file_size=$_FILES['file']['size'];
            $file_type=$_FILES['file']['type'];
            $location= "uploads/".$file_name;
            move_uploaded_file($file_tmp,$location);

            $data =  array(
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'type'=> $_POST['type'],
                'suitetype'=> $_POST['suitetype'],
                'capacity'=> $_POST['capacity'],
                'price' => $_POST['price'],     
                'image' => $_FILES['file']['name'], 
            );
            if(empty($_FILES['file']['name']) || empty($_POST['price'])  || empty($_POST['description']) || empty($_POST['name']) || empty($_POST['type']) || empty($_POST['capacity'])){
                Session::set('error','fill out all');
                Redirect::to('add');
            } else if(empty($_POST['suitetype'])){
                $result = Product::add1($data);
             if($result==='ok'){
                Session::set('success','Room Added');
                Redirect::to('dashbord');
            } else {
                echo $result;
            }
          } else{
            $result = Product::add($data);
            if($result==='ok'){
               Session::set('success','Room Added');
               Redirect::to('dashbord');
           } else {
               echo $result;
           }
          }  
        }
      }




    public function updateProduct(){
        if(isset($_POST['submit'])){
            $file_name=$_FILES['file']['name'];
            $file_tmp=$_FILES['file']['tmp_name'];
            $file_size=$_FILES['file']['size'];
            $file_type=$_FILES['file']['type'];
            $location= "uploads/".$file_name;
            
            $data =  array(
                'id' => $_POST['id'],
                'name' => $_POST['name'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],
                'type' => $_POST['type'],
                'suitetype'=> $_POST['suitetype'],
                'capacity' => $_POST['capacity'],
                'image' => $_FILES['file']['name'], 
            );
            if(empty($file_name)){
                $result = Product::update1($data);
                if($result==='ok'){
                    Session::set('success','Product Update');
                    Redirect::to('dashbord');
                } else {
                    echo $result;
                }
            }else{
                $result = Product::update($data);
                if($result==='ok'){
                    Session::set('success','Product Update');
                    Redirect::to('dashbord');
                } else {
                    echo $result;
                }   
                move_uploaded_file($file_tmp,$location);
            }
           
        }
    }


    public function deleteProduct(){
        if(isset($_POST['id'])){
            $data['id'] =$_POST['id'];
            $result = Product::delete($data);
            if($result==='ok'){
                Session::set('success','Product Delete');
                Redirect::to('dashbord');
            } else {
                echo $result;
            }
        }
    }
  

 
    public function addRes(){
        if(isset($_POST['submit'])){
            $_SESSION['datedebut'] = $_POST['datedebut'];
            $_SESSION['datefin'] = $_POST['datefin'];
    }
  }
    public function addReservation(){
        if(isset($_POST['books'])){
             $data =  array(
            'iduser' => $_SESSION['id'],
            'idroom' => $_POST['id'], 
            'capacity' => $_POST['capacity'], 
            'datedebut' => $_SESSION['datedebut'],
            'datefin' => $_SESSION['datefin'],
            );
            $result = Product::addRes($data);
            if($result==='ok'){
                Session::set('success','Reservation added successfully ');
                Redirect::to('booking#booking');
            } else {
                echo $result;
        }   
    }
    
  }

  public function addReservationGuest(){
    if(isset($_POST['bookst'])){
        $_SESSION['idroom'] = $_POST['id'];
           Redirect::to('guest');         
    }
}
  public function addGuest(){
    if(isset($_POST['booksuite'])){
        $i=0;
        $data =  array(
            'iduser' => $_SESSION['id'],
            'idroom' =>$_SESSION['idroom'], 
            'capacity' => $_POST['number'], 
            'datedebut' => $_SESSION['datedebut'],
            'datefin' => $_SESSION['datefin'], 
            );
            
        $result = Product::addRes($data);
        $result = Product::idRes();
       
        while($i<$_POST['number']){
            $datages =  array(
                'fullname' => $_POST['fullname'.$i+1], 
                'date' => $_POST['date'.$i+1], 
                'idres' =>$result,
                );
                $result = Product::addGes($datages);
                $i++;  
        }
       
        if($result==='ok'){
            Session::set('success','Reservation added successfully ');
            Redirect::to('booking');
        } else {
            echo $result;
    }   
   }

}

 
}
?>