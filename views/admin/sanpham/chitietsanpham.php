<div   class="content-wrapper">
 
<div class="card ml-5  ">
<h1>Chi Tiết Sản Phẩm</h1>
<?php
if(is_array ($sp) ){
  extract($sp);
  
}
 
if(is_array ($list_category) ){
  extract($list_category);
  
}
$suasp = "index.php?act=suasp&id=" . $id;


$imgpath="../../upload/".$img;
if(is_file($imgpath)){
 $img="<img src='".$imgpath."' height='500 '>";
}else{
 $img="No photo";
}

                
echo'
    <div class="d-flex">
    <div class="" style="width:40%">
    <p   >'.$img.'</p>
       
    </div>
        <div style="width:600px" class="card-body">
        <h3>Tên Sản phẩm :  '.$name_pro.'</h3>
    
        <p>
        <span>Giá : </span>
        <span class="vnd">'.$price.'</span>
        
        </p>
        <p> Mô tả : '.$description.'</p>
        <p>  Số Lượng: '.$count.'</p>
       
        <a href="' . $suasp . '"><input  class="btn btn-primary" type="button" value="Sửa thông tin sản phẩm"></a>

  </div>
      
    </div>'
    ?>
    
</div>

<h2 class="text-center">Bình Luận</h2>
<div class="">
  
<table class="table table-light table-striped">
<?php
 
 
// $dsbl=loadall_binhluan($idpro);
// var_dump($dsbl);
// die();
    
  
    // var_dump($listbl);
    // die();
    ?>
 <tr>
    <td>iduser</td>
    <td>Nội dung bình luận</td>
    <td>Ảnh</td>
    <td>Ngày đăng</td>

  </tr> 
 <?php  foreach($dsbl as $v){
  // $idpro =$v['idpro'];
  // var_dump($idpro);
  // die();
   $imgpath="../../upload/".$img;
   $imgpath = "../../upload/" . $v['img'];
                if (is_file($imgpath)) {
                    $img = "<img src='" . $imgpath . "' height='60 '>";
                } else {
                    $img = "No photo";
                }
    echo '<tr>
    <td>'. $v['iduser']. '</td>
    <td>'. $v['content']. '</td>
    <td>'. $img. '</td>
    <td>'. $v['comment_date']. '</td>

 
  <tr>';
     
    
 }?>
</table>
</div>
</div>