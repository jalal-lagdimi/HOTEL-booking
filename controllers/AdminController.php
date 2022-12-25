<?php 

class AdminController{
    static public function signup(){
        if(isset($_POST['submit'])){
            $options = [
                'cost'=>12
            ];
            $password = password_hash($_POST['password'],PASSWORD_BCRYPT,$options);
            $data =  array(
                'fullname' => $_POST['fullname'],
                'date' => $_POST['date'],
                'email'=> $_POST['email'],
                'password'=> $password,
            );
            $result = Admin::loginuser($data);
            if(empty($_POST['fullname'])||empty($_POST['date'])||empty($_POST['email'])||empty($_POST['password'])){
                Session::set('error','fill out all');
                Redirect::to('signup');
            }else if($_POST['email']=== $result->email ){
                    Session::set('error','email already used');
                    Redirect::to('signup');
            }
            else{
                $result = Admin::creatUser($data);
                if($result==='ok'){
                    Session::set('success','acount created');
                    Redirect::to('loginuser');
                } else {
                    echo $result;
                }
            }  
        }
    }


    public function auth(){
        if(isset($_POST['submit'])){
            $data['email'] = $_POST['email'];
            $result = Admin::login($data);
            if($result->email === $_POST['email'] && password_verify($_POST['password'],$result->password)){
                $_SESSION['logged'] = true;
                Redirect::to('dashbord');
            } else {
                Session::set('error','email or password not valid ');
                Redirect::to('login');
            }
        }
    }

    public function authuser(){
        if(isset($_POST['submit'])){
            $data['email'] = $_POST['email'];
            $result = Admin::loginuser($data);
            if($result->email === $_POST['email'] && password_verify($_POST['password'],$result->password)){
                $_SESSION['loggeduser'] = true;
                Redirect::to('booking');
            } else {
                Session::set('error','email or password not valid');
                Redirect::to('loginuser');
            }
        }
    }
    static public function logout(){
        session_destroy();
    }
}
?>