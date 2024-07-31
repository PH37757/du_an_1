<form action="index.php?act=trangchu" method="post">
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Trang chủ</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <!-- <h3>4</h3> -->

                <p>Danh mục</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="index.php?act=dsdanhmuc" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <!-- <h3>7</h3> -->

                <p>Sản phẩm</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="index.php?act=dssanpham" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <!-- <h3>4</h3> -->

                <p>Tài khoản</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="index.php?act=danhsachtk" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <!-- <h3>25</h3> -->

                <p>Đơn hàng</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="index.php?act=danhsachdh" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </section>
            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  <h4>Các đơn hàng mới chưa phê duyệt</h4>
                  <tr>
                  <table class="table table-light table-striped">
                <td>Mã đơn hàng</td>
                
                <td>Tên Khách hàng</td>
                <td>Số điện thoại</td>
                <td>Trạng thái</td>
                <td>Hành động</td>
                
            </tr>
                  <?php
            if (isset($listbillhome) && is_array($listbillhome)) {
                extract ($listbillhome);
            }
            // var_dump($listbillhome);
            // die();
            if (isset($listcarthome) && is_array($listcarthome)) {
                extract ($listcarthome);
            }
                 
                  foreach ($listbillhome as $bill) {

$listcarthome['idbill'] = $bill['id'];
$kh = $bill['user_name'];

$ctdh = "index.php?act=chitietdh&id=" . $bill['id'];
// Retrieve cart items for the current order
$listcart = loadall_cart($bill['id']);
$check = "";
if($bill['status']==0){
$check="Đơn hàng mới";
}elseif($bill['status']==1){
$check="Đang xử lí";
}elseif($bill['status']==2){
$check="Đang giao hàng";
}elseif($bill['status']==3){
$check="Hoàn thành";
}elseif($bill['status']==4){
$check="Đơn hàng đã bị hủy";
}else{
"Đơn hàng không tồn tại";
}

echo '
<tr>
    <td>' . $bill['id'] . '</td>
    ';

echo '</td>
   
    
    <td>' . $kh . '</td>
    <td>' . $bill['phone_number'] . '</td>
    <td>' . $check . '</td>
    <td>
        <a href="' . $ctdh . '"><input class="btn btn-info" type="button" value="Xem chi tiết"></a>
    </td>
</tr>';
}            ?>
</table>
                </h3>
              </div>
              <!-- /.card-header -->

              <!-- /.card-body -->

            </div>
            <!-- /.card -->
              <!-- /.card-body -->
            </div>
          </section>
          

  </div>
</form>