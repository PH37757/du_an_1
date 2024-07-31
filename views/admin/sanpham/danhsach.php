<div class="content-wrapper">
    <div>
        <h1 class="text-center">DANH SÁCH SẢN PHẨM</h1>
        <a href="index.php?act=themsanpham" class="btn btn-success ml-2">Thêm sản phẩm</a>
    </div>
    <form action="index.php?act=dssanpham" method="post">
        <table class="table table-light table-striped">
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Danh mục</th>
                <th>Giá</th>
                <th>Ảnh</th>

                <th>Chức năng</th>
            </tr>
            <?php
            //   var_dump($list_pro);
            foreach ($list_pro as $value) {
                $suasp = "index.php?act=suasp&id=" . $value['id'];
                $xoasp = "index.php?act=xoasp&id=" . $value['id'];
                $sanphamct= "index.php?act=sanphamchitiet&id=" . $value['id'];

                $imgpath = "../../upload/" . $value['img'];
                if (is_file($imgpath)) {
                    $img = "<img src='" . $imgpath . "' height='60 '>";
                } else {
                    $img = "No photo";
                }

                echo '<tr>
            <td>' . $value['id'] . '</td>
            <td>' . $value['name_pro'] . '</td>
            <td>' . $value['id_cate'] . '</td>
            <td class="vnd">' . $value['price'] . '</td>
             
            <td>' . $img . '</td>
            <td>
                <a onclick="return deletesp()" href="' . $xoasp . '"><input  class="btn btn-danger" type="button" value="Xóa"></a>
                     
                   
                    <a href="' . $suasp . '"><input  class="btn btn-success" type="button" value="Sửa"></a>
                    <a href="' . $sanphamct . '"><input  class="btn btn-primary" type="button" value="Chi tiết"></a>
            </td>
        </tr>';
            }
             
            ?>
        </table>


    </form>
</div>
<script>
    function deletesp(){
        return confirm('Bạn có chắc muốn xóa')
    }
</script>
 