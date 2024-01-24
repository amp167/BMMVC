<?php
class Post extends Controller
{
    public function __construct(){
        $this->categortModel =$this->model('CategoryModel');
        $this->postModel = $this->model('PostModel');
    }
    public function home(){
        $data = [
            'category' => '',
            'post'=>''
        ];
        $data['category'] = $this->categortModel->getAllCategory();
        $data['post'] = $this->postModel->getAllpost();
        $this->view('admin/post/home',$data);
    }
    public function category($param=[]){
        $data = [
            'category' => '',
            'post'=>''
        ];
        setCurrentCategory($param[0]);
        $data['category'] = $this->categortModel->getAllCategory();
        $data['post'] = $this->postModel->getPostById($param[0]);
        $this->view('admin/post/home',$data);
    }
    public function create(){
        $data = [
            'cat_id'=>'',
            'title'=>'',
            'description'=>'',
            'image'=>'',
            'content'=>'',
            'title_err'=>'',
            'description_err'=>'',
            'image_err'=>'',
            'content_err'=>'',
            'catData'=>''
        ];
        $data['catData'] = $this->categortModel->getAllCategory();

        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            $file = $_FILES['image'];
            $data['title'] = $_POST['title'];
            $data['cat_id'] = $_POST['category'];
            $data['description'] = $_POST['description'];
            $data['content'] = $_POST['content'];
            $data['image'] = $file['name'];
            if (empty($data['title'])){
                $data['title_err'] = "Title must supply";
            }
            if (empty($data['description'])){
                $data['description_err'] = "Description must supply";
            }
            if (empty($data['image'])){
                $data['image_err'] = "Image must supply";
            }
            if (empty($data['content'])){
                $data['content_err'] = "Content must supply";
            }
            if (empty($data['title_err']) && empty($data['description_err']) && empty($data['image_err']) && empty($data['content_err'])){
                if ($this->postModel->create($data['cat_id'],$data['title'],$data['description'],$data['image'],$data['content'])){
                    redirect(URLROOT."post/home/".$data['cat_id']);
                }else{
                    flash('post_create_fail',"failed to create post");
                    $this->view('admin/post/create');
                }

            }
            $this->view('admin/post/create',$data);
            move_uploaded_file($file['tmp_name'],"assets/uploads/".$file['name']);
        }else{
            $this->view('admin/post/create',$data);
        }
    }
    public function delete($param=[])
    {

        if ($this->postModel->deletePost($param[0])){
            redirect(URLROOT."post/Category/".getCurrentCategory());
            unsetCurrentCategory();
        }
    }
}