<?php
 function out_all_size(){
    $sql = "SELECT * FROM tb_size order by id desc" ;
    $list_size =  pdo_query($sql) ;
    return $list_size ;
}

?>