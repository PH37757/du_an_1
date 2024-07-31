<?php 
function insert_category($name_cate,$filename){
    $sql = "INSERT INTO tb_category(name_cate,img) VALUES ('$name_cate','$filename') ";
    pdo_execute($sql) ;
}
function delete_category($id){
    $sql ="DELETE FROM tb_category where id =".$id;
    pdo_execute($sql) ;
}
function out_all_category(){
    $sql = "SELECT * FROM tb_category order by id desc" ;
    $list_cate =  pdo_query($sql) ;
    return $list_cate ;
}

function out_one_category($id){
    $sql = "SELECT * FROM tb_category WHERE id=".$id ;
    $updatedm =  pdo_query_one($sql) ;
    return $updatedm;
}

function update_category($id,$name_cate ){
   
     $sql = "update tb_category set name_cate ='".$name_cate."'   where id=".$id;

   pdo_execute($sql) ;
} 
 

?>