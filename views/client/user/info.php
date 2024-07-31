<?php
if(isset($_SESSION['user_name'])&&(is_array($_SESSION['user_name']))){
    extract($_SESSION['user_name']);
}
?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Thông tin tài khoản
        </div>
        <div class="card-body">
          <div class="">
          <li class="list-group-item "> <img style="height: 60px; width:60px" class="rounded-circle" src="../../upload/<?=$img?>" alt=""><strong>  <?=$user_name?></strong></li>
          </div>
          <ul class="list-group">
            <li class="list-group-item">Số điện thoại: <strong><?php if(isset($phone_number)&&($phone_number)!="") echo $phone_number?></strong></li>
            <li class="list-group-item">Email: <strong><?php if(isset($email)&&($email)!="") echo $email?></strong></li>
            <li class="list-group-item">Address: <strong><?php if(isset($address)&&($address)!="") echo $address?></strong></li>
            <h6 class="list-group-item"><a href="index.php?act=mybill" class="text-body"><i class=""></i>Xem đơn hàng</a></h6>
          </ul>
          <button type="button" class="btn btn-info"><a href="index.php?act=suatk">Cập nhật thông tin</a></button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Link đến Bootstrap JS và Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
