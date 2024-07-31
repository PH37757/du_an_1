<?php
if(isset($_SESSION['name_role'])&&(is_array($_SESSION['name_role']))){
    extract($_SESSION['name_role']);
};
$imgpath="../../../upload/".$img;
    // if(is_file($imgpath)){
    //  $img="<img src='".$imgpath."' height='60 '>";
    // }else{
    //  $img="No photo";
    // }
?>
<div class="content-wrapper">
 
    <h1 class="text-center pt-5">Thông tin cá nhân</h1>
        <section class="" style="background-color: #f4f5f7;">
  <div class=" py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              
              <img src="<?=$imgpath?>"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Thông tin cá nhân</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-12 mb-3">
                    <h6>Email : <strong><?=$email?></strong></h6>
                  </div> <br>
                  <div class="col-12 mb-3">
                    <h6>Số điện thoại : <strong><?=$phone_number?></strong></h6>
                  </div>
                </div>
                <h6>Địa chỉ <strong><?=$address?></strong></h6>
                <hr class="mt-0 mb-4">
                
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    </div>
</form>
</div>

