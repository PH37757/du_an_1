<?php
if (isset($_SESSION['user_name']) && (is_array($_SESSION['user_name']))) {
  extract($_SESSION['user_name']);
}
?>
<div class="container mt-5">

  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <form method="post" action="index.php?act=suatk">
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
                        <span class="h1 fw-bold mb-0">Cập nhật thông tin</span>
                      </div>
                      <div class="form-outline mb-4">
                        <label class="form-label" for="loginName">Tên đăng nhập</label>
                        <input required type="text" name="user_name" value="<?= $user_name ?>" class="form-control" />
                      </div>

                      <div class="form-outline mb-4">
                        <label class="form-label" for="loginName">Email</label>
                        <input required type="email" name="email" value="<?= $email ?>" class="form-control" />
                      </div>
                      <div class="form-outline mb-4">
                        <label class="form-label" for="loginName">Số điện thoại</label>
                        <input required type="text" name="phone_number" value="<?= $phone_number ?>" class="form-control" />
                      </div>
                      <div class="form-outline mb-4">
                        <label class="form-label" for="loginName">Địa chỉ</label>
                        <input required type="text" name="address" value="<?= $address ?>" class="form-control" />
                      </div>
                      <div class="form-outline mb-4">
                        <label class="form-label" for="registerPassword">Ảnh</label>
                        <input required type="file" name="img" class="form-control" />
                      </div>
                      <div class="form-outline mb-4">
                        <label class="form-label" for="loginPassword">Mật khẩu</label>
                        <input required type="password" name="pass_word" value="<?= $pass_word ?>" class="form-control" />
                      </div>


                      <div class="pt-1 mb-4">
                        <input class="nav-link active" type="hidden" name="id_user" value="<?php if (isset($id_user) && ($id_user > 0)) echo $id_user; ?>">

                        <input class="nav-link active" type="submit" name="capnhat" value="Cập nhật">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


    </form>
    <?php
    if (isset($thongbao) && ($thongbao != "")) {
      echo $thongbao;
    }
    ?>
  </div>
</div>