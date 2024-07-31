<?php
include "header.php";
?>

<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <form method="post" action="index.php?act=dangnhap">

        <section class="vh-100" style="background-color: #fff;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-6">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-12 col-lg-12 d-flex align-items-center">
              <div class="card-body p-4 p-lg-12 text-black">


                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Đăng nhập</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Đăng nhập vào tài khoản của bạn</h5>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example17">Tên đăng nhập</label>
                    <input name="user_name" id="form2Example17" class="form-control form-control-lg" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example27">Mật khẩu</label>
                    <input name="pass_word" type="password" id="form2Example27" class="form-control form-control-lg" />
                  </div>

                  <div class="pt-1 mb-4">
                  <input class="nav-link active" type="submit" id="tab-login" name="dangnhap" value="Đăng nhập" data-mdb-toggle="pill" role="tab" aria-controls="pills-login" aria-selected="true">
                  </div>
                  <a class="small text-muted" href="index.php?act=quenmk">Quên mật khẩu?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Bạn không có tài khoản? <a href="#!"
                      style="color: #393f81;"><a href="index.php?act=dangky">Đăng Ký</a></p></a></p>
                      <?php
                      if(isset($thongbao)&&($thongbao!="")){ echo $thongbao; }
                      ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </form>
</div>
</div>
<!-- Link đến Bootstrap JS và Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <?php
include "footer.php";

?>

