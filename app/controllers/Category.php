<?php
class Category extends Controller

{
    public function __construct(){
        $this->catModel = $this->model('CategoryModel');
    }
    public function create($data=[]){
        $data = [
            'name'=>'',
            'name_err'=>'',
            'cats'=> $this->catModel->getAllCategory()
        ];
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            $data['name'] = $_POST['name'];
            if (empty($data['name'])){
                $data['name_err'] = "Category must be supply";
                $this->view('admin/category/home',$data);
            }else{
                if ($this->catModel->getCategoryByName($data['name'])){
                    $data['name_err'] = "Category already Exits!";
                    $this->view('admin/category/home',$data);
                }else{
                    if ($this->catModel->insertNewCategory($data['name'])){
                        flash("Category_created","Category created successfully!");
                        $data['cats']=$this->catModel->getAllCategory();
                        $this->view('admin/category/home',$data);
                    }else{
                        flash("Category_create_fail","ERROR!");
                        $this->view('admin/category/home',$data);

                    }
                }
            }
        }else{

            $this->view('admin/category/home',$data);
        }
    }
    public function edit($editData=[]){
        $data = [
            "name"=>"",
            "name_err"=>"",
            "cats"=>"",
            "currentCat"=>""
        ];
        $data['cats'] = $this->catModel->getAllCategory();
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            $data['name'] = $_POST['name'];
            if (!empty($data['name'])){
                if ($this->catModel->updateCategory(getCurrentId(),$data['name'])){
//                    flash('update_category_successful',"Updated Category Successfully");
//                    $data['cats'] = $this->catModel->getAllCategory();
//                    $data['currentCat']=$this->catModel->getCategoryById(getCurrentId());
                    redirect(URLROOT."category/create");
                }else{
                    flash('update_category_error',"Error,Updating Category");
                    redirect(URLROOT."admin/category/edit");

                }
            }else{
                $data['name_err']="Category name must Supply";
                $data['currentCat']=$this->catModel->getCategoryById(getCurrentId());
                $this->view('admin/category/edit',$data);
            }
        }else{
            setCurrentId($editData[0]);
            $data['currentCat']=$this->catModel->getCategoryById($editData[0]);
            $this->view('admin/category/edit',$data);
        }
    }
    public function delete($data=[]){
        if ($this->catModel->deleteCategory($data[0])){
            redirect(URLROOT."category/create");
        }else{
            redirect(URLROOT."category/create");
        }
    }


}