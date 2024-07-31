
<?php
function insert_sanpham($name_pro,$price,$filename,$description,$id_cate,$count,$id_size){
    $sql="insert into tb_products(name_pro,price,img,description,id_cate,count,id_size) values('$name_pro','$price','$filename','$description','$id_cate','$count','$id_size')";
            pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="delete from tb_products where id=".$_GET['id'];
    pdo_execute($sql);
}

function out_all_products(){
    $sql = "SELECT * FROM tb_products order by id desc" ;
    $list_pro =  pdo_query($sql) ;
    return $list_pro ;
}
 
function load_search($keyword, $id_cate){
    $sql = "SELECT * FROM tb_products WHERE 1 ";
    if($keyword != ""){
        $sql .= " AND name like '%".$keyword."%'";
        }
        if($id_cate >0){
            $sql.= " AND  id_cate = '".$id_cate."' " ;
        }
    $sql.= " order by id desc ";
    $listsp =  pdo_query($sql) ;
    return $listsp ;
} 
function load_name_cate($id_cate){
    if($id_cate >0){
    $sql = "SELECT * FROM tb_category WHERE id_cate=".$id_cate ;
    $cate =  pdo_query_one($sql) ;
    extract($cate) ;
    return $name_cate;
    }else{
        return "";
    }
}
function loadone_sanpham($id){
    $sql="select * from tb_products where id=".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}

function loadall_sanpham(){
    $sql = "select * from tb_products limit 0,8";
    $list_products = pdo_query($sql);
    return  $list_products;
}


function  update_sanpham($id,$name_pro,$price,$description,$id_cate,$count,$id_size,$filename){
   
       $sql="update tb_products set name_pro='".$name_pro."',price='".$price."',description='".$description."',id_cate='".$id_cate."',count='".$count."',id_size='".$id_size."',img='".$filename."' where id=".$id;
      
    pdo_execute($sql);
}

function related_products($id){
    // $sql = "select * from tb_category INNER JOIN tb_products  On tb_products.id_cate = tb_category.id where tb_category.id = $id";
    $sql = "
    SELECT * FROM tb_products
    WHERE id_cate = (
        SELECT id_cate FROM tb_products WHERE id = $id
        ) AND id != $id";
    $related_products = pdo_query($sql);
    return $related_products;
}

    function poduct_category(){
        $sql = "select * from tb_category";
        $list_poduct_category = pdo_query($sql);
        return $list_poduct_category;
    }
?>
