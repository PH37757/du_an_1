<?php
function insert_user($user_name,$pass_word,$email,$phone_number,$address,$filename){
    $sql = "INSERT INTO tb_user(`user_name`,`pass_word`,`email`,`phone_number`,`address`,`img`) values('$user_name','$pass_word','$email','$phone_number' ,'$address','$filename')";
    pdo_execute($sql);
}
function out_all_role(){
    $sql = "SELECT * FROM tb_role" ;
    $list_role =  pdo_query($sql) ;
    return $list_role ;
}
function out_all_status(){
    $sql = "SELECT * FROM tb_status" ;
    $list_status =  pdo_query($sql) ;
    return $list_status ;
}
function edit_user($id_user,$name_role){
    $sql = "UPDATE tb_user SET name_role = '".$name_role."'  WHERE id_user=".$id_user;
    pdo_execute($sql);
}
function check_user($user_name,$pass_word){
    $sql = "SELECT * FROM tb_user where user_name='".$user_name."' AND pass_word = '".$pass_word."'";
    $checkuser = pdo_query_one($sql);
    return $checkuser;
}
function  user($user_name,$pass_word){
    $sql = "SELECT * FROM tb_user where user_name='".$user_name."' AND pass_word = '".$pass_word."'";
    $checkuser = pdo_query_one($sql);
    return $checkuser;
}

function check_email($email){
    $sql = "SELECT * FROM tb_user where email='".$email."'";
    $user = pdo_query_one($sql);
    return $user;
}
function out_all_user(){
    $sql = "SELECT * FROM tb_user order by id_user desc" ;
    $list_user =  pdo_query($sql) ;
    return $list_user ;
}
function out_one_user($id_user){
    $sql = "SELECT * FROM tb_user WHERE id_user=".$id_user ;
    $user =  pdo_query_one($sql) ;
    return $user;
}
function update_user($id_user,$user_name,$pass_word, $email,$address,$phone_number,$img ){
    $sql = "UPDATE tb_user SET user_name = '".$user_name."',id_user = '".$id_user."',pass_word = '".$pass_word."',email ='".$email."',address ='".$address."',phone_number ='".$phone_number."',img ='".$img."'   WHERE id_user=".$id_user;
    pdo_execute($sql) ;
}
function delete_user($id_user){
    $sql ="DELETE FROM tb_user where id_user=".$id_user;
     pdo_execute($sql) ;
}
?>