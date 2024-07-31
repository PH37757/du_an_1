<div class="content-wrapper">
<h1 class="text-center" >CẬP NHẬT DANH MỤC</h1>
<?php
 if(is_array ($updatedm) ){
  extract($updatedm);
  $imgpath="../../upload/".$img;
                if(is_file($imgpath)){
                 $img="<img src='".$imgpath."' height='60 '>";
                }else{
                 $img="No photo";
                }
 }
?>
 
<form class="ml-5" action="index.php?act=capnhatdanhmuc" method="POST" enctype="multipart/form-data">
<div class="mb-3">
 
      <label   class="form-label">Mã danh mục</label>
      <input type="text"   class="form-control w-50 p-3" name="id" value="<?php if(isset($id)&&($id)!="") echo $id?>"  >
    </div>
    <div class="mb-3">
      <label   class="form-label">Tên danh mục</label>
      <input type="text"   class="form-control w-50 p-3 " name="name_cate"  value="<?php if(isset($name_cate)&&($name_cate)!="") echo $name_cate ?>"  >
    </div>
    <div class="mb-3">
      <label   class="form-label">Ảnh</label>
      <input type="file"     name="img"  value=" "  >
       
    </div>
    
    <input type="hidden" name="id" value="<?php if(isset($id)&&($id)!="") echo $id ?>">
    <input onclick="return sua()" type="submit" class="btn btn-primary" name="capnhat" value="Sửa danh mục" >
    <input  class="btn btn-secondary" type="reset" value="Nhập lại">
         <a href="index.php?act=dsdanhmuc" class="btn btn-success">Danh sách</a>

</form>
</div>

<script>
  function sua(){
    return confirm('Bạn có chắc muôn sửa sản phẩm');
  } 
</script>