<div class="content-wrapper">
<div>
<h1 class="text-center">DANH SÁCH DANH MỤC</h1>
<a href="index.php?act=themdanhmuc"><input  class="m-2 btn btn-success" type="button" value="Thêm mới"></a>
</div>


    <table class="table table-light table-striped">
        <tr>
            <th>Mã danh mục</th>
            <th>Tên danh mục</th>
            <th>Ảnh</th>
            <th>Chức năng</th>
           
            
        </tr>
        <?php
        foreach($list_category as $cate){
                extract($cate);
                $suadm="index.php?act=sua&id=".$id;
                $xoadm="index.php?act=xoadanhmuc&id=".$id;
                $imgpath="../../upload/".$img;
                if(is_file($imgpath)){
                 $img="<img src='".$imgpath."' height='60 '>";
                }else{
                 $img="No photo";
                }
            echo '
            <tr>
                <td>'.$id.'</td>
                <td>'.$name_cate.'</td>
                <td>'.$img.'</td>
                <td>
                    <a onclick="return deletesp()" href="'.$xoadm.'"><input  class="btn btn-danger" type="button" value="Xóa"></a>
                     
                   
                    <a href="'.$suadm.'"><input  class="btn btn-info" type="button" value="Sửa"></a>

                </td>
            </tr>
                ';
        }
        ?>
    </table>



</div>
<script>
    function deletesp(){
        return confirm('Bạn có chắc muốn xóa')
    }
</script>