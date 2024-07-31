<?php if(isset($_SESSION['user_name'])&&($_SESSION['user_name']!="")  ){  ?>
<?php
// Biến session mycart
$mycartData = $_SESSION['mycart'];
?>
<div id="cartData" data-mycart="<?= htmlentities(json_encode($mycartData)) ?>"></div>
<?php if (!empty($_SESSION['mycart'])) : ?>
  <section class="h-100 mt-5 h-custom" style="background-color: #d2c9ff;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px;">
            <div class="card-body p-0">
              <div class="row g-0">
                <div class="col-lg-8">
                  <div class="p-5">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                      <h1 class="fw-bold mb-0 text-black">Giỏ Hàng</h1>
                      <h6 class="mb-0"><a href="index.php" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Trở lại trang bán hàng</a></h6>
                    </div>
                    <hr class="my-4">

                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                      <table class="text-center table-bordered table ">
                        <thead>
                          <tr>
                            <th>Ảnh</th>
                            <th>Tên</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thành Tiền</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php
                         $tongca = 0;
                         $i = 0;
                         foreach ($_SESSION['mycart'] as $product) {
                             $tongtiensp = $product['4'] * $product['5'];
                             $tongca += $tongtiensp;
                         ?>
                         
                         <!-- Hiển thị thông tin của từng sản phẩm ở đây -->
                         <tr class="">
                             <td class="">
                                 <div class="">
                                     <img style="width:100px; height:125px" src="../../upload/<?= $product[1] ?>" alt="<?= $product[2] ?>">
                                 </div>
                             </td>
                             <td>
                                 <div class="">
                                     <h6 style="margin-top:24%" class="text-black mb-0">
                                         <?= $product[2] ?>
                                     </h6>
                                 </div>
                             </td>
                             <td>
                                 <div style="width:90px; margin-top:51px" class="">
                                     <h6 class="text-black mb-0 vnd">
                                         <?= $product[4] ?> 
                                     </h6>
                                 </div>
                             </td>
                             <td>
                                 <div style="margin-top:46px" class=" text-center">
                                     <input min="1" name="soluong" value="<?= $product['5'] ?>" type="number" style="width:50px " class="form-control form-control-sm" oninput="updateTotalPrice(<?= $i ?>, this.value)" />
                                 </div>
                             </td>
                             <td>
                                 <div style="margin-top:51px" class=" offset-lg-1">
                                     <h6 class="mb-0 vnd" data-initial-price="" id="totalPrice_<?= $i ?>">
                                         <?= $tongtiensp ?>
                                     </h6>
                                 </div>
                             </td>
                             <td>
                                 <div style="margin-top:52px" class="col-md-1 col-lg-1 col-xl-1 text-end">
                                     <a href="index.php?act=delcart&idcart=<?= $i ?>" class="text-muted" onclick="return confirmDelete()" ><i class="fas fa-times"></i></a>
                                 </div>
                             </td>
                         </tr>
                         <?php
                             $i++;
                         }
                         ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 bg-grey">
                  <div class="p-5">
                    <h3 class="fw-bold mb-5 mt-2 pt-1">Thanh Toán</h3>
                    <hr class="my-4">
                    <div class="d-flex justify-content-between mb-4">
                      <h6 class="text-uppercase">
                        <?= $i ?> Sản phẩm
                      </h6>
                    </div>
                    <hr class="my-4">
                    <div class="d-flex justify-content-between mb-5">
                      <h6 class="text-uppercase">Tổng giá</h6>
                      <h6 class="vnd" id="totalCartPrice">
                        <?= $tongca ?>
                      </h6>
                    </div>
                    <a href="index.php?act=checkout">
                      <button type="button" onclick="return dathang()" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark">Đặt
                        hàng</button>
                    </a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php else : ?>
  <section class="h-100 mt-5 h-custom" style="background-color: #d2c9ff;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px;">
            <div class="card-body p-0">
              <div class="p-5">
                <div class="d-flex justify-content-between align-items-center mb-5">
                  <h1 class="fw-bold mb-0 text-black">Giỏ Hàng</h1>
                  <h6 class="mb-0 text-muted">Giỏ Hàng trống</h6>
                </div>
                <div class="py-5">
                  <h6 class="mb-0"><a href="index.php" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Trở lại trang bán hàng</a></h6>
                </div>
              </div>
            </div>
            <div class="col-lg-4 bg-grey">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php } else{
  header('location:login.php');
  }?>

<script>
    function confirmDelete() {
        return confirm("Bạn có chắc chắn muốn xóa không?");
    }
    function dathang() {
        return confirm("Bạn có chắc chắn muốn đặt hàng?");
    }
var cartDataElement = document.getElementById('cartData');
var mycartData = JSON.parse(cartDataElement.getAttribute('data-mycart'));

// Hàm cập nhật tổng giá trị
function updateTotalPrice(cartId, newQuantity) {
    // Cập nhật số lượng mới của sản phẩm trong giỏ hàng
    mycartData[cartId]['5'] = parseInt(newQuantity);
    
    // Tính toán lại thành tiền của từng sản phẩm và tổng giá trị của giỏ hàng
    var totalCartPrice = 0;
    mycartData.forEach(function(product, index) {
        var totalPricePerProduct = parseFloat(product['4']) * product['5'];
        totalCartPrice += totalPricePerProduct;
        document.getElementById('totalPrice_' + index).innerText = totalPricePerProduct.toLocaleString('vi-VN') + ' đ';
    });

    // Hiển thị tổng giá trị của giỏ hàng
    document.getElementById('totalCartPrice').innerText = totalCartPrice.toLocaleString('vi-VN') + ' đ';

    // Gửi thông tin giỏ hàng qua AJAX (nếu cần)
    $.ajax({
        type: 'POST',
        url: 'update_cart.php',
        data: {
            cart: JSON.stringify(mycartData)
        },
        success: function(response) {
            console.log(response);
        }
    });
}
        // Lấy phần tử đầu tiên có class là "vnd"
        let elements = document.querySelectorAll('.vnd');
        
        // Lặp qua từng phần tử và định dạng số sang VND
        elements.forEach(function(element) {
            // Lấy giá trị bên trong từng thẻ
            let textValue = element.textContent;
            // Chuyển đổi giá trị từ chuỗi sang số
            let numericValue = parseInt(textValue);
            // Định dạng số sang VND và cập nhật nội dung trong từng thẻ
            let formattedVND = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(numericValue);
            element.textContent = formattedVND;
        });
</script>

