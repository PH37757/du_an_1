<?php 
ob_start();
session_start();
include "../../models/pdo.php";
include "../../models/cart.php";
include "../../models/sanpham.php";
include "../../models/danhmuc.php";
include "../../models/taikhoan.php";
$sql = "select * from tb_products";
$list_poduct_category = poduct_category();
include 'header.php';

if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

$list_products = pdo_query($sql);
if (isset($_GET['act'])&&($_GET['act']!="")){
    $act = $_GET['act'];
    switch ($act){
        case 'contact':
            include "contact.php";
            break;
        case 'list_category':
            $id = $_GET['id'];
            $sql = "select * from tb_category INNER JOIN tb_products  On tb_products.id_cate = tb_category.id where tb_category.id = $id";
            $list_cate = pdo_query($sql);
            include "list_category.php";
            break;
        case 'detail_pro':
            $id = $_GET['id'];
            $sql = "select * from tb_products where id = $id";
            $list_products = pdo_query($sql);
            $img_library = "select * from tb_img_library where pro_id = $id";
            $list_img_library = pdo_query($img_library);
            $related_products = related_products($id);
            include "detail_pro.php";
            break;
        case 'search':
            if (isset($_POST['keyword'])&&($_POST['keyword']!="")){
                $keyword = $_POST['keyword'];
            }else{
                $keyword='';
            }
            if (isset($_GET['id_cate'])&&($_GET['id_cate']>0)){
                $id_cate = $_GET['id_cate'];
            }else{
                $id_cate=0;
            }
            $dssp = load_search($keyword, $id_cate);
            $name_cate = load_name_cate($id_cate);
            include "category.php";
            include "product.php";
            break;
        case 'cart':
            include "cart/cart.php";
            include "update_cart.php";
            break;
        case 'bangsize':
            include "bangsize.php";
            break;
            case 'muangay':
                if (isset($_POST['muangay']) && $_POST['muangay']) {
                    $id = $_POST['id'];
                    $img = $_POST['img'];
                    $name_pro = $_POST['name_pro'];
                    $description = $_POST['description'];
                    $price = $_POST['price'];
                    $count = 1;
                    $total = $count * $price;

                        $proadd = [$id, $img, $name_pro, $description, $price, $count, $total];
                        array_push($_SESSION['mycart'], $proadd);
                    
                }
                
                include "cart/checkout.php";
                break;
        case 'addtocart':
            if (isset($_POST['addtocart']) && $_POST['addtocart']) {
                $id = $_POST['id'];
                $img = $_POST['img'];
                $name_pro = $_POST['name_pro'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $count = 1;
                $total = $count * $price;
        
                // Kiểm tra nếu sản phẩm đã tồn tại trong giỏ hàng
                $productExists = false;
                foreach ($_SESSION['mycart'] as $key => $product) {
                    if ($product[0] == $id) {
                        // Sản phẩm đã có trong giỏ hàng
                        $productExists = true;
                        // Tăng số lượng sản phẩm
                        $_SESSION['mycart'][$key][5] += $count;
                        // Cập nhật tổng giá
                        $_SESSION['mycart'][$key][6] = $_SESSION['mycart'][$key][5] * $_SESSION['mycart'][$key][4];
                        break;
                    }
                }
                // Nếu sản phẩm chưa có trong giỏ hàng, thêm mới
                if (!$productExists) {
                    $proadd = [$id, $img, $name_pro, $description, $price, $count, $total];
                    array_push($_SESSION['mycart'], $proadd);
                }
            }
            
            include "cart/cart.php";
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = []; 
            }
            header("location:index.php?act=cart");
            exit();
            break;
        case 'checkout':
            include "cart/checkout.php";
            break;
        case 'confirmbill':
            if (isset($_POST['dathang'])&&($_POST['dathang'])){
                if(isset($_SESSION['user_name'])) $id_user = $_SESSION['user_name']['id_user'];
                else $id = 0;
                $user_name = $_POST['user_name'];
                $email = $_POST['email'];
                $phone_number = $_POST['phone_number'];
                $address = $_POST['address'];               
                $date = date('Y/d/m');
                $pttt = $_POST['pttt'];
                $tongdonhang = tongdonhang();

                $idbill = insert_bill($id_user,$user_name,$email,$phone_number,$address,$date,$pttt,$tongdonhang);

                foreach($_SESSION['mycart'] as $cart){
                    insert_cart($_SESSION['user_name']['id_user'],$cart[0],$cart[1],$cart[2],$cart[4],$cart[5],$cart[4],$idbill);
                }
                $_SESSION['mycart'] = [];
            }
            $bill = loadone_bill($id);
             
            $listbill = loadall_cart($idbill);
            include 'cart/confirmbill.php';
            break;
        case 'mybill':
            if(isset($_POST['id'])&&($_POST['id'])){
                $id = $_POST['id'];
                $status = $_POST['status'];
                update_donhangmoi($id,$status);
            }
            $listbill =loadall_bill($id_user);
            $listcart = loadall_cart('idbill');
            include 'cart/mybill.php';
            break;
            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    
                     $user_name = $_POST['user_name'];
                     $pass_word = $_POST['pass_word'];
                     $email = $_POST['email'];
                     $phone_number = $_POST['phone_number'];
                     $address =$_POST['address'];
                     $filename=$_FILES['img']['name'];
               $target_dir = "../../upload/";
            $target_file = $target_dir . basename($_FILES["img"]["name"]);
            if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
              //  "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["nechoame"])). " has been uploaded.";
            } else {
             // echo "Sorry, there was an error uploading your file.";
            }
            
           
                  insert_user($user_name,$pass_word,$email,$phone_number,$address,$filename );
                  header('location: login.php');
                    $thongbao = "Đăng kí thành công";
                 }
                 include 'user/register.php';
                 break;
 
        case 'dangnhap':
            if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
                $user_name = $_POST['user_name'];
                $pass_word = $_POST['pass_word'];
                $check_user = check_user($user_name, $pass_word);
                if (is_array($check_user)) {
                    $_SESSION['user_name'] = $check_user;
                    header('location: index.php');
                } else {
                    header('location: login.php');
                    $thongbao = "Tài khoản hoặc mật khẩu không đúng.";
                }
            }
            break;
            case 'dangnhap2':
                if(isset($_POST['guibinhluan']) &&($_POST['guibinhluan'])){
                    header('location: login.php');
                }
                break;
        case 'thongtintk':
            $_SESSION['user_name'] = check_user($user_name,$pass_word) ;
            include "user/info.php";
            break;
        case 'suatk':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                
                $user_name = $_POST['user_name'];
                $pass_word = $_POST['pass_word'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone_number = $_POST['phone_number'];
                $id_user = $_POST['id_user'] ;
                $img = $_POST['img'] ;
            update_user($id_user,$user_name,$pass_word, $email, $address,$phone_number,$img);
            $_SESSION['user_name'] = check_user($user_name,$pass_word) ;
            header("location: index.php?act=thongtintk");
            $thongbao = "Cập nhật thành công";
            }
            include 'user/suatk.php' ;
            break;
        case 'quenmk':
            if(isset($_POST['gui']) && ($_POST['gui'])){
                $email = $_POST['email']; 
                $checkemail = check_email($email) ;
            if(is_array($checkemail)){
                $thongbao = "Mật khẩu của bạn là: ".$checkemail['pass_word'] ;
            }else{
                $thongbao =  "email không tồn tại " ;
            }
            }
            include 'user/quenmk.php' ;
            break;
        case 'dangxuat':
            session_unset();
            header("location: index.php");
            break;
    }
}
else{
    $list_products = loadall_sanpham();
    // $cate = "select * from tb_category";
    // $list_cate = pdo_query($cate);
    $list_cate = out_all_category();
    include "carousel.php";
    include "category.php";
    include "product.php";
    // include 'favorite_product.php';
}
include 'footer.php';
ob_end_flush();
?>

<?php

