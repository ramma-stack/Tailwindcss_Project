<?php

class Upload extends db_object{

    protected static $table_name = "post";
    protected static $column = array('user_id','title','price','fileName');
    public $post_id;
    public $user_id;
    public $title;
    public $price;
    public $fileName;
    public $type;
    public $tmp_name;
    public $error;
    public $size;

    public function scan_image($image){

        $imageAllow = array('png','jpg','jpeg','gif','svg');
        $imageExt = explode('.',$image['name']);
        $imageActualExt = strtolower(end($imageExt));

        if(empty($image) || $image['size'] == 0){
            return "! وێنەکە بەتاڵە";
        }else if($image['error'] != 0){
            return "!وێنەکە کێشەی هەیە";
        }else if(!in_array($imageActualExt,$imageAllow)){
            return "! وێنەکە ناخوێنرێتەوە";
        }else{
            $this->fileName = rand().$image['name'];
            $this->tmp_name = $image['tmp_name'];
            return $this->save_image();
        }
    }

    public function save_image(){

        if(empty($this->fileName)){
            return "! وێنەکە بەتاڵە";
        }
        if(empty($this->tmp_name)){
            return "! شوێنی وێنەکە دیاری ناکرێت";
        }
        $direction1 = $this->tmp_name;
        $direction2 = "../images/$this->fileName";
        //move_uploaded_file($direction1,$direction2)
        if(true){
           $this->create();
        }else{
            echo "! گواستنەوەی وێنە کێشەی هەیە";
        }
    }
}

$upload = new Upload();

