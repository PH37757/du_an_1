<div class="content-wrapper">
  <div class="">
    <h1 class="text-center">Cập nhật</h1>

    <form class="ml-5" action="index.php?act=capnhatsp" method="post" enctype="multipart/form-data">
    <?php
        if(is_array ($sp) ){
          extract($sp);
          
         }
    ?>
      <div class="mb-3">
        <label class="form-label">Mã sản phẩm</label>
        <input type="text" class="form-control w-50 p-3" name="id" value="<?php if(isset($id)&&($id)!="") echo $id?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Tên sản phẩm</label>
        <input type="text" class="form-control w-50 p-3 " name="name_pro" value="<?php if(isset($name_pro)&&($name_pro)!="") echo $name_pro?>">
      </div>
      <div class="mb-3">
        <label class="form-label" >Danh mục</label> <br>
        <select name="id_cate" id="">
        <?php
                     foreach($list_category as $danhmuc){
                      extract($danhmuc);
                      echo '<option value="'.$id.'">'.$name_cate.'</option>';
                     }
                   ?>
   
    </select>
      </div>
      <div class="mb-3">
        <label class="form-label" >Bảng size</label> <br>
        <select name="id_size" id="">
        <?php
                     foreach($list_size as $ds){
                      extract($ds);
                      echo '<option value="'.$id.'">'.$name_size.'</option>';
                     }
                   ?>
    
    </select>
      </div>
      <div class="mb-3">
        <label class="form-label">Số  lượng</label>
        <input type="text" class="form-control w-50 p-3 " name="count" value="<?php if(isset($count)&&($count)!="") echo $count?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Giá</label>
        <input type="text" class="form-control w-50 p-3 " name="price" value="<?php if(isset($price)&&($price)!="") echo $price?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Hình ảnh</label> <br>
        <input type="file" name="img"  id="">
      </div>
      <div class="mb-3">
        <label class="form-label">Mô tả</label>
        <input type="text" class="form-control w-50 p-3" name="description" value="<?php if(isset($description)&&($description)!="") echo $description?>">
      </div>

     <input   type="submit" class="btn btn-primary" onclick="return confirmcn()" name="capnhat" value="Cập nhật"> 
      <input class="btn btn-secondary" type="reset" value="Nhập lại">
      <a href="index.php?act=dssanpham" class="btn btn-success">Danh sách</a>

    </form>
  </div>
</div>
<script>
    function confirmcn(){
        return confirm('Bạn có chắc muốn lưu thay đổi')
    }
</script>