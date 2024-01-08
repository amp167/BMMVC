<?php
class User extends Controller {
    public function __construct(){
    }
    public function login(){
        $this->view('user/login');
    }
    public function Register(){
        $this->view('user/register');

    }
}