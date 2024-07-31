<?php if (!empty($_SESSION['mycart'])) ?>
    <main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <form class="needs-validation" method="post" action="index.php?act=confirmbill">
            
                
                
                    
                <input type="hidden" name="kh_tendangnhap" value="dnpcuong">
                <div class="py-5 text-center">
                    <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                    <h2>Thanh toán</h2>
                    <p class="lead">Vui lòng kiểm tra thông tin Khách hàng, thông tin Giỏ hàng trước khi Đặt hàng.</p>
                </div>

                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Giỏ hàng</span>
                            <span class="badge badge-secondary badge-pill">2</span>
                        </h4>

                        <ul class="list-group mb-3">
                        <?php
                      $tongca = 0;
                      foreach ($_SESSION['mycart'] as $product) { 
                        $tongtiensp = $product['4']*$product['5'];
                        $tongca += ($product['4']*$product['5']);
                        ?>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0"><?=$product['2']?></h6>
                                    <small class="text-muted vnd"><?=$product['4']?></small><small class="text-muted"> x <?=$product['5']?></small>
                                </div>
                                <span class="text-muted vnd"><?=$tongtiensp?></span>
                            </li><?php } ?>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Tổng thành tiền</span>
                                <strong class="vnd"><?=$tongca?></strong>
                            </li>
                        </ul>
                        
<!-- 
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Mã khuyến mãi">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">Xác nhận</button>
                            </div>
                        </div> -->

                    </div>
                    <?php if(!isset($_SESSION["user_name"])){ ?>
                        <h4 class="mb-3">Thông tin khách hàng</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="kh_ten">Họ tên</label>
                                <input type="text" class="form-control" name="user_name" value=""
                                     >
                            </div>
                            <div class="col-md-12">
                                <label for="kh_diachi">Địa chỉ</label>
                                <input type="text" class="form-control" name="address" value=""
                                    >
                            </div>
                            <div class="col-md-12">
                                <label for="kh_dienthoai">Điện thoại</label>
                                <input type="text" class="form-control" name="phone_number" value=""
>
                            </div>
                            <div class="col-md-12">
                                <label for="kh_email">Email</label>
                                <input type="text" class="form-control" name="email" value=""
                                    >
                            </div>
                            
                        </div>
                    <?php }else{ ?>
                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Thông tin khách hàng</h4>
                        <?php if(isset($_SESSION['user_name'])){
                            $phone = $_SESSION['user_name']['phone_number'];
                            $email = $_SESSION['user_name']['email'];
                        }else{
                            $name = '';
                            $phone = '';
                            $email = '';
                        }
                        ?>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="kh_ten">Họ tên</label>
                                <input required type="text" class="form-control" name="user_name" value="<?=$user_name?>"
                                     >
                            </div>
                            <div class="col-md-12">
                                <label for="kh_diachi">Địa chỉ</label>
                                <input required type="text" class="form-control" name="address" value="<?=$address?>"
                                    >
                            </div>
                            <div class="col-md-12">
                                <label for="kh_dienthoai">Điện thoại</label>
                                <input required type="text" class="form-control" name="phone_number" value="<?=$phone_number?>"
>
                            </div>
                            <div class="col-md-12">
                                <label for="kh_email">Email</label>
                                <input required type="text" class="form-control" name="email" value="<?=$email?>"
                                    >
                            </div>
                            
                        </div>
                        <?php } ?>
                        <h4 class="mb-3">Hình thức thanh toán</h4>

                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="httt-1" name="pttt" type="radio" class="custom-control-input" required=""
                                    value="1">
                                <label class="custom-control-label" for="httt-1">Tiền mặt</label>
                            </div>
                            <!-- <div class="custom-control custom-radio">
                                <input id="httt-2" name="pttt" type="radio" class="custom-control-input" required=""
                                    value="2">
                                <label class="custom-control-label" for="httt-2">Chuyển khoản</label>
                            </div> -->
                        </div>
                        <hr class="mb-4">
                        <input class="btn btn-primary btn-lg btn-block"  type="submit" onclick="return dathang2()" name="dathang" value="Đặt hàng">
                    </div>
                </div>
            </form>

        </div>
        <!-- End block content -->
    </main>