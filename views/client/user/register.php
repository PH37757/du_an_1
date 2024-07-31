<form method="post" action="index.php?act=dangky"  enctype="multipart/form-data">
  <section class="vh-120" style="background-color: #fff;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-6">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-12 col-lg-12 d-flex align-items-center">
                <div class="card-body p-4 p-lg-12 text-black">
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Đăng Ký</span>
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="registerUsername">Tên đăng nhập</label>
                    <input required type="text" name="user_name" class="form-control" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="">Email</label>
                    <input required type="email" name="email" class="form-control" />
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="">Số điện thoại</label>
                    <input required type="text" name="phone_number" class="form-control" />
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="">Địa chỉ</label>
                    <input required type="text" name="address" class="form-control" />
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" >Ảnh</label>
                    <input  type="file" name="img" class="form-control" />
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="registerPassword">Mật khẩu</label>
                    <input required type="password" name="pass_word" class="form-control" />
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="registerRepeatPassword">Nhập lại mật khẩu</label>
                    <input required type="password" name="pass_word" class="form-control" />
                  </div>

                  <div class="pt-1 mb-4">
                    <input type="submit" class="btn btn-success  nav-link active" name="dangky" value="Đăng kí">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Submit button -->

</form>
<?php
if (isset($thongbao) && ($thongbao != "")) {
  echo $thongbao;
}
?>
</div>
</div>