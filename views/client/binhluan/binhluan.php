<?php
     session_start();
     include '../../../models/pdo.php';
     include '../../../models/binhluan.php';
     
     
      
       
   

     if(isset($_SESSION['user_name'])&&($_SESSION['user_name']>0)){
            $user=$_SESSION['user_name'];
            // var_dump( $user);
            // die();
            $iduser=$user['id_user'];
           
            


            if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                    $idpro=$_POST['idpro'];
                    $iduser=$_POST['iduser'];
                    $content=$_POST['content'];
                    $comment_date=date('y/m/d ');
                    $filename=$_FILES['img']['name'];
                    $target_dir = "../../../upload/";
                 $target_file = $target_dir . basename($_FILES["img"]["name"]);
                      if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                   //  "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["nechoame"])). " has been uploaded.";
                 } else {
                  // echo "Sorry, there was an error uploading your file.";
                 }
                 insert_comment($idpro,$iduser,$content,$comment_date,$filename);
                  
                     
                 $thongbao="thêm thành công";
                 
                  
            }
            


             
            
            
            
      
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
        <form action="binhluan.php" width="100%" height="1000px" method="post" enctype="multipart/form-data">
            
            <h2><?php echo $user['user_name'] ?></h2>
            <input type="hidden" name="iduser" value="<?php echo $iduser ?>">
            
                 <!--    $idpro=$_REQUEST['idpro'];   -->
                 <?php
                  $_SESSION['idpro'] = $_REQUEST['idpro'];
                //   echo $_SESSION['idpro'];
                //   die();?>
                 
            <input type="hidden" name="idpro" value="<?=$_SESSION['idpro'] ?>"> 
            <textarea class="form-control" id="comment" rows="3" name="content"  required></textarea>
            <input type="file" name="img" id=""><br>
            <input type="submit" name="guibinhluan" class="btn btn-primary" value="Bình luận">
            <br>
            
        </div>
        </form>
</body>
</html>
<table class="table table-hover">
   <tr>
    <td>Người bình luận</td>
    <td>Nội dung bình luận</td>

    <td>Ảnh</td>
    <td>Ngày bình luận</td>

   </tr>
 
<?php }else
// này

{ ?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
        <form action="binhluan.php" width="100%" height="1000px" method="post" enctype="multipart/form-data">
            
            
            <input type="hidden" name="iduser" value="<?php echo $iduser ?>">
            
                 <!--    $idpro=$_REQUEST['idpro'];   -->
                 <?php
                  $_SESSION['idpro'] = $_REQUEST['idpro'];
                //   echo $_SESSION['idpro'];
                //   die();?>
                 
            <input type="hidden" name="idpro" value="<?=$_SESSION['idpro'] ?>"> 
            <!-- <textarea class="form-control" id="comment" rows="3" name="content"  ></textarea>
            <input type="file" name="img" id=""><br> -->
            <p>Đăng nhập để bình luận</p>
            <a href="../login.php" target='_parent'>
                <input type="" name="guibinhluan" class="btn btn-primary" value="Đăng nhập">
            </a>
            <br>
            
        </div>
        </form>
</body>
</html>
<table class="table table-hover">
   <tr>
    <td>Nội dung bình luận</td>
    <td>Ảnh</td>
    <td>Ngày bình luận</td>
   </tr>
   <?php
$idpro= $_REQUEST['idpro'];
$dsbl=loadall_binhluan($idpro);



foreach($dsbl as $v){
    // $idpro =$v['idpro'];
    // var_dump($idpro);
    // die();
    $imgpath = "../../../upload/" . $v['img'];
                if (is_file($imgpath)) {
                    $img = "<img src='" . $imgpath . "' height='50'>";
                } else {
                    $img = "No photo";
                }
            
                echo '<tr>
            <td>' . $v['content'] . '</td>
            <td>' . $img . '</td>
            <td>' . $v['comment_date'] . '</td>
             
           <br>
    <tr>';
                }
 
            

?>  
    
    <?php } ?>
    <?php
$idpro= $_REQUEST['idpro'];
$dsbl=loadall_binhluan($idpro);

if(isset($_SESSION['user_name'])&&($_SESSION['user_name']>0)){
    $user=$_SESSION['user_name']['user_name'];
   

foreach($dsbl as $v){
    // $idpro =$v['idpro'];
    // var_dump($idpro);
    // die();
    $imgpath = "../../../upload/" . $v['img'];
                if (is_file($imgpath)) {
                    $img = "<img src='" . $imgpath . "' height='50'>";
                } else {
                    $img = "No photo";
                }
            
                echo '<tr>
            <td>' . $user . ' </td>
            <td>' . $v['content'] . '</td>
            <td>' . $img . '</td>
            <td>' . $v['comment_date'] . '</td>
             
           <br>
    <tr>';
                }
 
            }

?>  
</table>