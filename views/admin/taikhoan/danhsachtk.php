<div class="content-wrapper">
<div>
  <h1 class="text-center">DANH SÁCH TÀI KHOẢN</h1>
  <a href="index.php?act=themtk" class="btn btn-success m-3" >Thêm tài khoản mới</a>
</div>
<table class="table table-dark table-striped">
  <tr>
    <td>ID</td>
    <td>Họ tên</td>
    <td>email</td>
    <td>Ảnh đại diện</td>
    <td>Số điện thoại</td>
    <td>Vai trò</td>
    <td>Chức năng</td>
  </tr>
  <?php
    foreach($list_user as $user){
    extract($user);
  
    $checkrole = "";
    if($name_role==1){
      $checkrole = "Người dùng";
    }else if($name_role==2){
      $checkrole = "Nhân viên";
    }else if($name_role==3){
      $checkrole = "Admin";
    }

    $suatk = "index.php?act=suatk&id_user=".$id_user;
    $xoatk = "index.php?act=xoatk&id_user=".$id_user;
    $chitiettk = "index.php?act=chitiettk&id_user=".$id_user;
    $imgpath="../../upload/".$img;
    if(is_file($imgpath)){
     $img="<img src='".$imgpath."' height='60 '>";
    }else{
     $img="No photo";
    }
    
      echo '
        <tr>
          <td>'.$id_user.'</td>
          <td>'.$user_name.'</td>
          <td>'.$email.'</td>
          <td>'.$img.'</td>


          <td>'.$phone_number.'</td>
          <td>'.$checkrole.'</td>
          
          <td>
            <a href="'.$suatk.'" class="btn btn-info" type="button">Sửa</a>
            <a onclick="return deletetk()" href="'.$xoatk.'" class="btn btn-danger" type="button">Xóa</a>
            <a href="'. $chitiettk.'" class="btn btn-light" type="button">Chi tiết</a>

            
          </td>
        </tr>
          ';
    }
    ?>
  
</table>
</div>
<script>
 function deletetk(){
    return confirm('Bạn có chắc muốn xóa tài khoản')
  }
</script>