<?php
 function insert_comment($idpro,$iduser,$content,$comment_date,$filename){
    $sql = "INSERT INTO tb_comment(idpro,iduser,content,comment_date,img) VALUES ('$idpro','$iduser','$content','$comment_date','$filename') ";
    pdo_execute($sql) ;
}
function loadall_binhluan($idpro)
{
    $sql = "select * from tb_comment where 1";
    
    if ($idpro > 0) $sql .= " AND idpro='" . $idpro . "'";
    $sql .= " order by id desc";
    $dsbl = pdo_query($sql);
    return $dsbl;
}
?>