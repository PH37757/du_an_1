<div><div class="content-wrapper ">
<h1 class="text-center">Cập nhật Tài Khoản</h1>
<form class="ml-5" action="index.php?act=capnhattk" method="POST"> 
<?php

$roler =$_SESSION['name_role']['name_role'];

if(isset($roler)>0 &&($roler)==3){

if(is_array($user)){
    extract($user);
}

?>
    <div class="mb-3">
      <label class="form-label">Id người dùng: </label>
      <input type="text" name="id_user" class="form-control w-50 p-3" value="<?php if(isset($id_user)&&($id_user)!="") echo $id_user ?>">
    </div>
    <select name="name_role" id="">
        <?php
          foreach($list_role as $role){
          extract($role);
          echo '<option value="'.$id.'">'.$name_role.'</option>';
          }
        ?>
      </select><br>
      <button type="button" class="btn btn-success"><a class="text-light" href="index.php?act=danhsachtk">Danh sách tài Khoản</a></button>
    <input type="submit" name="capnhat" class="btn btn-primary" value="Cập nhật">
    </div class="mb-3">
     

 <?php  
}else{
   echo "Vui lòng đăng nhập bằng tài khoản ADMIN để chỉnh sửa";
} 
 ?>  
</form>
</div>
