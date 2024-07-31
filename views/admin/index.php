<?php
session_start();
ob_start();
$roler=$_SESSION['name_role']['name_role'];
if(isset($roler)>0 &&($roler)==3 || ($roler)==2){
include "header.php";
include "../../models/pdo.php";
include "../../models/cart.php";
include "../../controller/global.php";
include '../../models/danhmuc.php' ;
include '../../models/sanpham.php';
include '../../models/taikhoan.php' ;
include '../../models/binhluan.php' ;

include '../../models/size.php' ;

$listcarthome = loadall_cart('idbill');
$listbillhome = loadnew_bill();



if(isset($_GET['act'])){
    $act = $_GET['act'];

    switch($act){
        case "themdanhmuc":
                if(isset($_POST['add'])&&($_POST['add'])){
                    $name_cate = $_POST['name_cate'];
                    $filename=$_FILES['img']['name'];
                    $target_dir = "../../upload/";
                 $target_file = $target_dir . basename($_FILES["img"]["name"]);
                 if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    
                 } else {
                   
                 }
                  
                    insert_category($name_cate,$filename) ;
               
                };
            include "danhmuc/themmoi.php";
         
            break;

        case "dsdanhmuc":
            $list_category = out_all_category() ;
            include "danhmuc/danhsach.php";
            break;
            case 'xoadanhmuc':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                   delete_category($_GET['id']);
                }
                $list_category=out_all_category() ;
                include "danhmuc/danhsach.php";          
                
             break;
        case "sua":
         
                if(isset($_GET['id'])&&($_GET['id']>0)){
                   $updatedm =out_one_category($_GET['id']);
                   
                }
                
                include "danhmuc/capnhat.php";
                break;
        case "capnhatdanhmuc":
                   
           
                if(isset($_POST['capnhat']) &&($_POST['capnhat'])){
                   

          
                   $name_cate=$_POST['name_cate'];
                   $id=$_POST['id'];
        //            $filename=$_FILES['img']['name'];
        //            $target_dir = "../../upload/";
        //   $target_file = $target_dir . basename($_FILES["img"]["name"]);
        //   if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
        //     //  "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["nechoame"])). " has been uploaded.";
        //   } else {
        //    // echo "Sorry, there was an error uploading your file.";
        //   }
          
       update_category($id, $name_cate );
                   $thongbao="cập nhật thành công";
                };
               
                
                
                $list_category = out_all_category() ;
            include "danhmuc/danhsach.php";
                
            break;

         
        case "themsanpham":
            if(isset($_POST['them']) &&($_POST['them'])){
            $name_pro=$_POST['name_pro'];
                $id_cate=$_POST['id_cate'];
                $id_size=$_POST['id_size'];

              $price=$_POST['price'];
              $count=$_POST['count'];
              $description=$_POST['description'];
              $filename=$_FILES['img']['name'];
              $target_dir = "../../upload/";
           $target_file = $target_dir . basename($_FILES["img"]["name"]);
           if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
             //  "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["nechoame"])). " has been uploaded.";
           } else {
            // echo "Sorry, there was an error uploading your file.";
           }
           insert_sanpham($name_pro,$price,$filename,$description,$id_cate,$count,$id_size);
             $thongbao="thêm thành công";
             }
            
             $list_category=out_all_category() ;
             $list_size=out_all_size();
            include "sanpham/themmoi.php";
            break;
        case "dssanpham":
           $list_pro= out_all_products();
            include "sanpham/danhsach.php";
            break;
            case 'xoasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                   delete_sanpham($_GET['id']);
                }
                $list_pro= out_all_products();
                include "sanpham/danhsach.php";
                
             break;

         case 'suasp':
                     if(isset($_GET['id'])&&($_GET['id']>0)){
                        $sp=loadone_sanpham($_GET['id']);
                     }
                     
                     $list_category=out_all_category() ;
                     $list_size=out_all_size();
                     include "sanpham/capnhat.php";
                     break;
      
                     case 'capnhatsp':
                        if(isset($_POST['capnhat']) &&($_POST['capnhat'])){
                            $id=$_POST['id'];
                          
                            $name_pro=$_POST['name_pro'];
                            $id_cate=$_POST['id_cate'];
                            $id_size=$_POST['id_size'];
            
                          $price=$_POST['price'];
                          $count=$_POST['count'];
                          $description=$_POST['description'];
                          $filename=$_FILES['img']['name'];
                          $target_dir = "../../upload/";
                       $target_file = $target_dir . basename($_FILES["img"]["name"]);
                       if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                         //  "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["nechoame"])). " has been uploaded.";
                       } else {
                        // echo "Sorry, there was an error uploading your file.";
                       }
                update_sanpham($id,$name_pro,$price,$description,$id_cate,$count,$id_size,$filename);
                           $thongbao="cập nhật thành công";
                        }
                        $list_category=out_all_category() ;
                        $list_size=out_all_size();
                        $list_pro= out_all_products();
                        include "sanpham/danhsach.php";
                        
                     break;
        case "sanphamchitiet":
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $sp=loadone_sanpham($_GET['id']);
             }
            $list_category=out_all_category() ;
            $list_size=out_all_size();
             $idpro=$_GET['id'] ;
             $dsbl=loadall_binhluan($idpro);
            include "sanpham/chitietsanpham.php";   
            break;
        case "danhsachtk":
            $list_user = out_all_user();
            include "taikhoan/danhsachtk.php";
            break;
            case "themtk":
                if(isset($_POST['add_tk']) && ($_POST['add_tk'])){
                    $user_name = $_POST['user_name'] ;
                    $pass_word = $_POST['pass_word'] ;
                    $email = $_POST['email'] ;
                    $phone_number = $_POST['phone_number'] ;
                    $address = $_POST['address'] ;
                    $img=$_FILES['img']['name'];
                    $target_dir = "../../upload/";
                 $target_file = $target_dir . basename($_FILES["img"]["name"]);
                 if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                   //  "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["nechoame"])). " has been uploaded.";
                 } else {
                  // echo "Sorry, there was an error uploading your file.";
                 }
                   
                    insert_user($user_name,$pass_word,$email,$phone_number,$address,$img );
                }
                $list_role =  out_all_role() ;
                include "taikhoan/themtk.php";
                // header('Location: taikhoan/danhsachtk.php');
                break;
            case "chitiettk":
                if(isset($_GET['id_user']) && ($_GET['id_user'] > 0)){
                    $user = out_one_user($_GET['id_user']);                         
                }
                $list_status =  out_all_status();
                include "taikhoan/chitiettk.php";
                break;
                case "suatk":
                    if(isset($_GET['id_user']) && ($_GET['id_user'] > 0)){
                        $user = out_one_user($_GET['id_user']);                         
                    }
                    $list_role =  out_all_role();
                    include 'taikhoan/suatk.php';
                break;
                case "capnhattk":
                    if(isset($_POST['capnhat']) &&($_POST['capnhat'])){
                        $id_user=$_POST['id_user'];
                        $name_role=$_POST['name_role'];
                        edit_user($id_user,$name_role);
                       $thongbao="cập nhật thành công";
                    }
                    $list_user=out_all_user();
                    $list_role= out_all_role();
                    include "taikhoan/danhsachtk.php";
                    break;
            case "xoatk":
                    if(isset($_GET['id_user']) && ($_GET['id_user']>0)){
                            
                        delete_user($_GET['id_user']);
                    }
                    $list_user =  out_all_user() ;
                    include 'taikhoan/danhsachtk.php';
                break;
                case 'dangxuat':
                    session_unset();
                    header("location: admin.php");
                    break;
        case 'thongtintk':
            $_SESSION['user_name'] = check_user($user_name,$pass_word) ;
            include "user/info.php";
            break;
        case "danhsachdh":
            $listcart = loadall_cart('idbill');
            $listbill = loadall_bill(0);
            include "donhang/danhsachdh.php";
            break;
        case "chitietdh":
            if(isset($_POST['id'])&&($_POST['id'])){
                $id = $_POST['id'];
                $status = $_POST['status'];
                update_status($id,$status);
            }
            if(isset($_GET['id']) && ($_GET['id'] > 0)){
                $bill = loadone_bill($_GET['id']);
                $cart = loadone_cart($_GET['id']);                      
            }
           
            $list_cart = loadall_cart('idbill');
            $listbill = loadall_bill(0);
            include "donhang/chitietdh.php";
            break;
            case "xoadh":
                if(isset($_GET['id']) && ($_GET['id']>0)){
                        
                    delete_bill($_GET['id']);
                }
                $listbill = loadall_bill(0);
                include "donhang/danhsachdh.php";
            break;
        case "bieudo":
                include "thongke/bieudo.php";
                break;   
        case "binhluan":
                    include "sanpham/binhluan/binhluan.php";
                    break;
        case "thongtinadmin":
                    include "thongtinadmin/info.php";
                    break;      

    default:
        include 'home.php' ;
        break;
    }
}else{
    include 'home.php' ;
}
include "footer.php";
}else{
    header('location: admin.php');
}