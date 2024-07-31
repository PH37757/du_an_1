
<div><div class="content-wrapper ">
<h1 class="text-center">Thêm Tài Khoản Mới</h1>
 

<form class="ml-5" action="index.php?act=themtk" method="POST" enctype="multipart/form-data">
  
                                                                                                                            
    <div class="mb-3">
      <label class="form-label">Họ và tên: </label>
      <input type="text" name="user_name" class="form-control w-50 p-3" placeholder="nhập vào họ tên">
    </div>
    <div class="mb-3">
      <label  class="form-label">Email:</label>
      <input type="email" name="email" class="form-control w-50 p-3" placeholder="nhập vào  email">
    </div>
    <div class="mb-3">
      <label  class="form-label">Số điện thoại:</label>
      <input type="text" name="phone_number" class="form-control w-50 p-3" placeholder="nhập vào sdt">
    </div>
    <div class="mb-3">
      <label  class="form-label">Địa chỉ:</label>
      <input type="text" name="address" class="form-control w-50 p-3" placeholder="nhập vào địa chỉ">
    </div>
    <div class="mb-3">
      <label  class="form-label">Mật khẩu:</label>
      <input type="password" name="pass_word" class="form-control w-50 p-3" placeholder="nhập vào mật khẩu">
    </div>
    <div class="mb-3">
    <div class="mb-3">
      <label  class="form-label">Ảnh:</label>
      <input type="file" name="img" class="form-control w-50 p-2">
    </div>
      
    </div>
    <!-- <div class="mb-3">
      <label for="confirmPassword" class="form-label">Xác nhận mật khẩu</label>
      <input type="password"  class="form-control w-50 p-3" placeholder="nhập vào tên danh mục">
    </div> -->
      <button type="button" class="btn btn-success"><a class="text-light" href="index.php?act=danhsachtk">Danh sách tài Khoản</a></button>
    <input type="submit" name="add_tk" class="btn btn-primary" value="Thêm mới"></input>
   
</form>
</div>
