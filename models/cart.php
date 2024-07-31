<?php

function tongdonhang(){
    $tongca = 0;
    foreach ($_SESSION['mycart'] as $product) { 
      $tongtiensp = $product['4']*$product['5'];
      $tongca += $tongtiensp;
    }
    return $tongca;
}
function insert_bill($id_user,$user_name,$email,$phone_number,$address,$date,$pttt,$tongdonhang){
    $sql = "INSERT INTO tb_bill(id_user,user_name,email,phone_number,address,date,pttt,total) values('$id_user','$user_name','$email','$phone_number','$address','$date',$pttt,'$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($id_user,$id_pro,$img,$name,$price,$soluong,$thanhtien,$idbill){
    $sql = "INSERT INTO tb_cart(id_user,id_pro,img,name,price,soluong,thanhtien,idbill) values('$id_user','$id_pro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}
function loadone_bill($id){
    $sql="select * from tb_bill where id=".$id;
    $bill=pdo_query_one($sql);
    return $bill;
}
function loadone_cart($idbill){
    $sql="select * from tb_cart where idbill=".$idbill;
    $cart=pdo_query_one($sql);
    return $cart;
}
function count_sp($idbill){
    $sql="select * from tb_cart where idbill=".$idbill;
    $listcart=pdo_query($sql);
    return sizeof($listcart);
}
function loadall_cart($idbill){
    $sql="select * from tb_cart where idbill=".$idbill;
    $listcart=pdo_query($sql);
    return $listcart;
}
function loadnew_bill(){

    $sql="select * from tb_bill where status = '0'";
    $listbill=pdo_query($sql);
    return $listbill;
}
function loadall_bill($id_user){

    $sql="select * from tb_bill where 1";
    if($id_user>0) $sql.=" AND id_user='".$id_user."'";
    $sql.=" order by id desc";
    $listbill=pdo_query($sql);
    return $listbill;
}
function update_status($id,$status){
    $sql = "UPDATE tb_bill SET status = '".$status."' WHERE id =".$id;
    pdo_execute($sql);
}
function get_status($s){
    switch($s){
        case '0' :
            $stt = 'Đơn hàng mới';
            break;
        case '1' :
            $stt = 'Đang xử lí';
            break;
        case '2' :
            $stt = 'Đang giao hàng';
            break;
        case '3' :
            $stt = 'Hoàn tất';
            break;
        case '4' :
            $stt = "Đơn hàng đã bị hủy";
            break;
        default :
        $stt = 'Đơn hàng mới';
        break;
    }
    return $stt;
}
function delete_bill($id){
    $del = "DELETE FROM tb_cart WHERE idbill=".$id;
    pdo_execute($del);
    $sql ="DELETE FROM tb_bill where id=".$id;
     pdo_execute($sql) ;
}
function update_donhangmoi($id,$status){
    $sql = "UPDATE tb_bill SET status = '4' WHERE id =".$id;
    pdo_execute($sql);
}



















?>