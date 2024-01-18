<?php
class PostModel{
    private $db;
    public function __construct(){
        $this->db = new Database();
    }
    public function getPostById($id){
        $this->db->query("SELECT * FROM posts WHERE cat_id=:id");
        $this->db->bind(":id",$id);
        return $this->db->multipleSet();
    }
    public function create($cat_id,$title,$description,$image,$content){
        $this->db->query("INSERT INTO posts (cat_id,title,description,image,content) VALUES  (:cat_id,:title,:description,:image,:content)");
        $this->db->bind('title',$title);
        $this->db->bind(':cat_id',$cat_id);
        $this->db->bind(':description',$description);
        $this->db->bind(':image',$image);
        $this->db->bind(':content',$content);
        return $this->db->execute();
    }
}
