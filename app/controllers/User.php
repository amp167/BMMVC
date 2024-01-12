<?php
class User extends Controller {
    public function __construct(){
        $this->usermodel = $this->model("UserModel");
    }
    public function login(){
        if ($_SERVER['REQUEST_METHOD']=='POST'){
//                    $data = [
//            "email"=>'',
//            "password"=>'',
//            "email_err"=>'',
//            "password_err"=>'',
//        ];
            echo "this is from POST";
        }else{
            $this->view('user/login');
        }
    }
    public function Register(){
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            $data = [
            "name"=>$_POST['username'],
            "email"=>$_POST['email'],
            "password"=>$_POST['password'],
            "confirm_password"=>$_POST['confirm_password'],
            "name_err"=>'',
            "email_err"=>'',
            "password_err"=>'',
            "confirm_password_err"=>''
            ];
            if (empty($data['name'])){
                $data['name_err'] = "User Name must be supply!";
            }
            if (empty($data['email'])){
                $data['email_err'] = "Email must be supply!";
            }else{
                if ($this->usermodel->getuserByEmail($data['email'])){
                    $data['email_err'] = "Email Already Exits";
                }
            }
            if (empty($data['password'])){
                $data['password_err'] = "Password Name must be supply!";
            }
            if (empty($data['confirm_password'])){
                $data['confirm_password_err'] = "Confirm password Name must be supply!";
            }else{
                if ($data['password']!==$data['confirm_password']){
                    $data['confirm_password_err']="Password does not match";
                }
            }
            if (empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
                if ($this->usermodel->register($data['name'],$data['email'],$data['password'])){
                    flash("register_success","Register_Success,Please Login!");
                    $this->view("user/login");
                }else{
                    $this->view("user/Register");

                }
            }else{
                $this->view('user/register',$data);
            }
        }else{
            $this->view('user/register');
        }
    }
}