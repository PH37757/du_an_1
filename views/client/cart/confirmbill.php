<div class="container mt-5">
  <div class="row">
    <div class="col-lg-8 mx-auto">
      <div class="card">
        <div class="card-header bg-dark text-white">
          <h2 class="mb-0">Đặt hàng thành công</h2>
        </div>
        <div class="card-body">
          <h5 class="card-title">Cảm ơn bạn đã đặt hàng</h5>
          <p class="card-text">Đơn hàng của bạn đã được đặt thành công. Dưới đây là chi tiết đơn hàng của bạn:</p>
          <?php
          if (isset($bill) && is_array($bill)) {
            extract($bill);
          }
          $check_pttt = "";
          if($pttt==1){
            $check_pttt = "Tiền mặt";
          }else{
            $check_pttt = "Chuyển khoản";
          }
          ?>
          <div class="card-title">Thông tin đơn hàng</div>
          <div class="row boxcontent">
            <li>Mã đơn hàng:
              <?= $id ?>
            </li>
            <li>Ngày đặt hàng:
              <?= $date ?>
            </li>
            <li>Tổng giá đơn hàng:
              <span class="vnd"><?= $tongdonhang ?></span>
            </li>
            <li>Phương thức thanh toán:
              <?= $check_pttt ?>
            </li>
          </div>
          <br>
          <div class="card-title">Thông tin đặt hàng</div>
          <!-- Order details table -->
          <table class="table">
            <thead>
              <tr>
                <th>Người đặt hàng</th>
                <td>
                  <?= $user_name ?>
                </td>
              </tr>
              <tr>

                <th>Địa chỉ</th>
                <td>
                  <?= $address ?>
                </td>
              </tr>
              <tr>
                <th>Email</th>
                <td>
                  <?= $email ?>
                </td>
              </tr>
              <tr>
                <th>Điện thoại</th>
                <td>
                  <?= $phone_number ?>
                </td>
              </tr>
          </table>

          <!-- Total Price -->


          <div class="row mb-4 d-flex justify-content-between align-items-center">
          <div class="d-flex">
          <div class="col-md">
                

          <div class="row mb-4 d-flex justify-content-between align-items-center">
          <table class="text-center table-bordered table ">
                        <thead>
                          <tr>
                            <th>Ảnh SP</th>
                            <th>Tên SP</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thành Tiền</th>
                          </tr>
                        </thead>
          <tbody>
            <?php
            //   if(isset($listbill)){
            //     extract($listbill);
            //   }
  
            $tongca = 0;
            foreach ($listbill as $cart) {
              $tongca += $cart['thanhtien'];
              ?>
              <!-- ảnh -->
              <tr>
                <td>
                  <div class="col-md">
                    <img style="width:100px" src="../../upload/<?= $cart['img'] ?>" alt="">
                  </div>
                  <td>
                    
                    <div class="col-md" style="margin-top:20%">
                      <h5 class="text-black mb-0">
                        <?= $cart['name'] ?>
                      </h5>
                    </div>
                    </td>
              </td>
              <td>

                <div class="col-md" style="margin-top:40%">
                  <h5 class="text-black vnd mb-0">
                    <?= $cart['price'] ?>
                  </h5>
                </div>
              </td>
              <td>

                <div class="col-md" style="margin-top:50%">
                  <h5 class="text-black mb-0">
                    <?= $cart['soluong'] ?>
                  </h5>
                </div>
              </td>
              <td>

                <div class="col-md" style="margin-top:40%">
                  <h5 class="vnd text-black mb-0">
                    <?= $cart['soluong']*$cart['price'] ?>
                  </h5>
                </div>
              </td>
              </tr>
            <?php } ?>
            </tbody>
            </table>
            <?php
                      $tongca = 0;
                      foreach ($_SESSION['mycart'] as $product) { 
                        $tongtiensp = $product['4']*$product['5'];
                        $tongca += ($product['4']*$product['5']);
                        ?><?php } ?>
            <div class="d-flex justify-content-between mb-5">
              <h5 class="text-uppercase">Tổng giá</h5>
              <h5 class="vnd">
                <?= $tongdonhang ?>
              </h5>
            </div>
            
          </div>

          <!-- Back to shopping button -->
          <div class="flex">
            <a href="index.php" class="btn btn-primary">Trở về trang mua hàng</a>
            <h6 class="mb-0"><a href="index.php?act=mybill" class="btn btn-light"><i class=""></i>Xem đơn hàng</a></h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS and Popper.js (for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-GLhlTQ8iKs9eqfZl3/caExqUGGOFERlFvPEs5tkfTzoIxpz1+76aDY5SjkN6tZ" crossorigin="anonymous"></script>