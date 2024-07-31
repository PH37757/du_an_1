<!-- Assuming $listbill is an array of bills retrieved from the database -->
<div class="content-wrapper max-h-2">
   <h1 class="text-center py-5">Chi tiết đơn hàng</h1>


<div class="row">
    <!-- right -->
    <div style="background-color: #fff;" class="col-sm-8 ml-5">
        <div class="row">
            <table class="table-striped text-center">
                <thead>
                    <tr>
                        <th class="">Ảnh Sp</th>
                        <th>Tên SP</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($list_cart) && is_array($list_cart)) {
                        foreach ($list_cart as $cart_item) {
                            if ($cart_item['idbill'] == $bill['id']) {
                                $imgpath = "../../upload/" . $cart_item['img'];

                                if (is_file($imgpath)) {
                                    $img = "<img src='" . $imgpath . "' height='60 '>";
                                } else {
                                    $img = "No photo";
                                }

                                echo '
                    <tr>
                        <td >' . $img . '</td>
                        <td>' . $cart_item['name'] . '</td>
                        <td class="vnd">' . $cart_item['price'] . ' đ</td>
                        <td>' . $cart_item['soluong'] . '</td>
                        <td class="vnd">' . $cart_item['soluong'] * $cart_item['price'] . ' đ</td>
                    </tr>';
                            }
                        }
                    }
                    ?>
                </tbody>
            </table>

        </div>

    </div>
    <!-- left -->
    <div class="col-sm-3 ml-4">
        <div class="border "style="width: 18rem;">
            <div style="background-color: #fff;" class="">
                <div class="ml-2">
                <h3> Trạng thái đơn hàng</h3>
            <?php
        if (isset($bill) && is_array($bill)) {
            extract($bill);
            $stt = get_status($bill['id']);
        }
        ?>
            <form action="index.php?act=chitietdh&id=<?= $bill['id'] ?>" method="post" id="formstt">
                <input type="hidden" value="<?= $bill['id'] ?>" name="id">
                <select name="status" id="status">
                    <option value="0" <?php if ($status == '0') echo 'selected'; ?>>Đơn hàng mới</option>
                    <option value="1" <?php if ($status == '1') echo 'selected'; ?>>Đang xử lí</option>
                    <option value="2" <?php if ($status == '2') echo 'selected'; ?>>Đang giao</option>
                    <option value="3" <?php if ($status == '3') echo 'selected'; ?>>Hoàn tất</option>
                    <option value="4" <?php if ($status == '4') echo 'selected'; ?>>Hủy đơn hàng</option>
                </select> <br>
                <button onclick="return capnhatdh()" class="mt-4 mb-3 btn btn-success ">Cập nhật</button>
            </form>
                </div>
            </div>
        </div>
        <div  class="mt-5">
        <div class="card" style="width: 18rem;">
  <div class="card-header">
    Thông tin đơn hàng
  </div>
  <ul class="list-group list-group-flush">
      <li class="list-group-item text-primary">Mã Đơn Hàng : <?= $bill['id'] ?></li>
      <li class="list-group-item text-primary">Tổng đơn hàng : <span class="vnd"><?= $bill['total'] ?></span> </li>
    <li class="list-group-item text-primary">Tên người nhận : <?= $bill['user_name'] ?></li>
    <li class="list-group-item">Email : <?= $bill['email'] ?></li>
    <li class="list-group-item">Số điện thoại : <?= $bill['phone_number'] ?></li>
    <li class="list-group-item">Địa chỉ : <?= $bill['address'] ?></li>
  </ul>
</div>
        </div>
    </div>
</div>
</div>
<script>
    function capnhatdh(){
        return confirm('Bạn có chắc cập nhật đơn hàng')
    }
</script>