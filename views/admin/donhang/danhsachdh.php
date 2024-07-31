<!-- Assuming $listbill is an array of bills retrieved from the database -->
<form action="dsdonhang" method="post">

    <div class="content-wrapper max-h-2">
        <table class="table table-dark table-striped">
            <tr>
                <td>Mã đơn hàng</td>
                <td>Tổng Giá</td>
                <td>Tên Khách hàng</td>
                <td>Số điện thoại</td>
                <td>Trạng thái</td>
                <td>Chức năng</td>
            </tr>
            <?php
            if (isset($listbill) && is_array($listbill)) {
                extract ($listbill);
            }
            if (isset($listcart) && is_array($listcart)) {
                extract ($listcart);
            }

                foreach ($listbill as $bill) {

                        $listcart['idbill'] = $bill['id'];
                    
                    $xoadh = "index.php?act=xoadh&id=" . $bill['id'];
                    $ctdh = "index.php?act=chitietdh&id=" . $bill['id'];
                    // Retrieve cart items for the current order
                    $listcart = loadall_cart($bill['id']);
                    $kh = $bill['user_name'];
                    $check = "";
                    if($bill['status']==0){
                        $check="Đơn hàng mới";
                    }elseif($bill['status']==1){
                        $check="Đang xử lí";
                    }elseif($bill['status']==2){
                        $check="Đang giao hàng";
                    }elseif($bill['status']==3){
                        $check="Hoàn thành";
                    }elseif($bill['status']==4){
                        $check="Đơn hàng đã bị hủy";
                    }else{
                        "Đơn hàng không tồn tại";
                    }

                    echo '
                        <tr>
                            <td>' . $bill['id'] . '</td>
                            ';

                    echo '</td>
                           
                            <td class="vnd">' . $bill['total'] . ' đ</td>
                            <td>' . $kh . '</td>
                            <td>' . $bill['phone_number'] . '</td>
                            <td>' . $check . '</td>
                            <td>
                                <a onclick="return deletedh()" href="' . $xoadh . '"><input class="btn btn-danger" type="button" value="Xóa"></a>
                                <a href="' . $ctdh . '"><input class="btn btn-info" type="button" value="Chi tiết"></a>
                            </td>
                        </tr>';
                }
            
            ?>
        </table>
    </div>
</form>
<script>
    function deletedh(){
        return confirm('Bạn có chắc muốn xóa đơn hàng')
    }
</script>