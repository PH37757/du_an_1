<div class="content-wrapper">
<h1 class="text-center">THÊM DANH MỤC MỚI</h1>
 

<form class="ml-5" action="index.php?act=themdanhmuc " method="POST" enctype="multipart/form-data">
  
                                                                                                                            
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Mã danh mục </label>
      <input type="text" id="disabledTextInput" class="form-control w-50 p-3" name="id" placeholder="nhập vào mã danh mục">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Tên danh mục</label>
      <input type="text" id="disabledTextInput" class="form-control w-50 p-3" name="name_cate" placeholder="nhập vào tên danh mục">
   
    
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Ảnh</label>
      <input type="file" id="disabledTextInput" class="form-control w-50 p-3" name="img" placeholder="nhập vào tên danh mục">
   
    
    </div>
        <!-- <button type="submit" class="btn btn-primary" name="add">Thêm mới</button> -->
        <input type="submit"   class="btn btn-primary " name="add" value="Thêm mới"  >

        <button type="reset" class="btn btn-danger" value="Nhập lại">Nhập lại</button>
 
        <button type="button" class="btn btn-success"><a class="text-light" href="index.php?act=dsdanhmuc">Danh sách</a></button>
     
    
   
</form>
<?php
 if(isset($thongbao)&&($thongbao!="")){
  echo $thongbao;
 }
?>
</div>