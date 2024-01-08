<?php
class Home extends Controller {
    public function __construct(){
        $this->usermodel = $this->model("UserModel");
    }
    public function index($data=[]){
        $data=$this->usermodel->getAlluser();
        $this->view("home/index",$data);
    }
}