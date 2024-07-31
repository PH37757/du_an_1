<div class="content-wrapper">
  <div class="">
    <h1 class="text-center">THÊM SẢN PHẨM MỚI</h1>

    <form class="ml-5" action="index.php?act=themsanpham" method="post" enctype="multipart/form-data">

    

      <div class="mb-3">
        <label class="form-label">Mã sản phẩm</label>
        <input type="text" class="form-control w-50 p-3" name="id" placeholder="nhập vào mã sản phẩm">
      </div>
      <div class="mb-3">
        <label class="form-label">Tên sản phẩm</label>
        <input type="text" class="form-control w-50 p-3 " name="name_pro" placeholder="Tên sản phẩm">
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
        <input type="text" class="form-control w-50 p-3 " name="count" placeholder="nhập vào giá">
      </div>
      <div class="mb-3">
        <label class="form-label">Giá</label>
        <input type="text" class="form-control w-50 p-3 " name="price" placeholder="nhập vào giá">
      </div>
      <div class="mb-3">
        <label class="form-label">Hình ảnh</label> <br>
        <input type="file" name="img" id="">
      </div>
      <div class="mb-3">
        <label class="form-label">Mô tả</label>
        <input type="text" class="form-control w-50 p-3" name="description" placeholder="mô tả sản phẩm">
      </div>

     <input   type="submit" class="btn btn-primary" name="them" value="Thêm"> 
      <input class="btn btn-secondary" type="reset" value="Nhập lại">
      <a href="index.php?act=dssanpham" class="btn btn-success">Danh sách</a>

    </form>
  </div>
</div>