

    <form method="post" action="index.php?act=quenmk">
      <!-- Email input -->
      <!-- <div class="form-outline mb-4 mt-5">
        <label class="form-label" for="loginName">Email</label>
        <input required type="email" name="email" class="form-control" />
      </div>
          <input type="submit" class="nav-link active" name="gui" value="Gửi"> -->
          <section class="vh-20" style="background-color: #fff;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-6">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-12 col-lg-12 d-flex align-items-center">
              <div class="card-body p-4 p-lg-12 text-black">

                <form>

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Quên mật khẩu</span>
                  </div>


                  <div class="form-outline mb-4">
                  <label class="form-label" for="loginName">Email</label>
        <input required type="email" name="email" class="form-control" />
                  </div>

          <input type="submit" class="nav-link active" name="gui" value="Gửi">
                  
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </form>
    <div class="text-center color-red">
    <?php
        if(isset($thongbao)&&($thongbao!="")){
            echo $thongbao;
        }
        ?>
    </div>
    
</div>




