<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <?php foreach ($listbill as $bill): ?>
              <?php
                if(is_array($bill))
                extract($bill);
                $status = get_status($status);
                $check_pttt = "";
                if($pttt==1){
                  $check_pttt = "Tiền mặt";
                }else{
                  $check_pttt = "Chuyển khoản";
                }
              ?>
                <div class="card mb-4">
                    <div class="card-header bg-dark text-white">
                        <h2 class="mb-0">Hóa Đơn #<?php echo $bill['id']; ?></h2>
                    </div>
                    <div class="card-body">
                        <p class="mb-2">Ngày Mua: <?php echo $bill['date']; ?></p>
                        <p class="mb-2">Tổng tiền: <?php echo $bill['total']; ?> đ</p>
                        <p class="mb-2">Phương Thức Thanh Toán: <?php echo $check_pttt; ?></p>
                        <p class="mb-2">Trạng Thái: <?php echo $status; ?></p>
                        
                        <?php if ($bill['status'] == 0 || $bill['status'] == 1): ?>
                                <form action="index.php?act=mybill&id=<?= $bill['id']?>" method="post">
                                    <input type="hidden" name="id" value="<?php echo $bill['id']; ?>">
                                    <input type="hidden" name="status" value="<?php echo $bill['status']; ?>">
                                    <!-- <input type="submit" name="huydon" class="btn btn-danger" value="Hủy đơn hàng"> -->
                                    <button onclick="return huydonhang()" class="mt-4 mb-3 btn btn-danger ">Hủy đơn hàng</button>
                                </form>
                            <?php endif; ?>
                        <!-- List of products in the bill -->
                        <ul class="list-group">
                            <?php foreach ($listcart as $cart): ?>
                                <?php
                                  if ($cart['idbill'] == $bill['id']): ?>
                                    <li class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1"><?php echo $cart['name']; ?></h5>
                                            <small>Số Lượng: <?php echo $cart['soluong']; ?></small>
                                        </div>
                                        <div class="d-flex w-100 justify-content-between">
                                            <small>Giá: <?php echo $cart['price']; ?></small>
                                            <small>Thành Tiền: <?php echo $cart['soluong']*$cart['price']; ?></small>
                                        </div>
                                        <div class="d-flex w-100 justify-content-between">
                                            <small><img width="60px" src="../../upload/<?php echo $cart['img']; ?>" alt=""></small>
                                        </div>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- Back to dashboard button -->
            <a href="index.php?act=cart" class="btn btn-primary mt-3">Trở Về Giỏ Hàng</a>
        </div>
    </div>
</div>
