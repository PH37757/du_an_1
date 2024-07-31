<!-- Footer -->
<script>
     function confirmDelete() {
        return confirm("Bạn có chắc chắn muốn xóa không?");
    }
    function addCart() {
        return confirm("Bạn có chắc chắn muốn thêm không?");
    }
    function dathang2() {
        return confirm("Bạn có chắc chắn muốn đặt hàng không?");
    }
    function huydonhang() {
        return confirm("Bạn có chắc chắn muốn hủy đơn hàng không?");
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
<div class="mt-5"></div>
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->

    <!-- Right -->
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Chăm sóc khách hàng</h6>
          <p>
            <a href="#!" class="text-reset">Trung Tâm Trợ Giúp</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Hướng Dẫn Bán Hàng</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Chăm Sóc Khách Hàng</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Chính Sách Bảo Hành</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
          LIÊN HỆ
          </h6>
          <p>
            <a href="#!" class="text-reset">Cao đẳng FPT POLYTECHNIC</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Nhóm 17</a>
          </p>
          <p>
            <a href="#!" class="text-reset">0961112861</a>
          </p>
          <p>
            <a href="#!" class="text-reset">xinchao@fpt.edu.vn</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
          CHÍNH SÁCH
          </h6>
          <p>
            <a href="#!" class="text-reset">Bảo hành 1-1 khi lỗi nhà sản xuất</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Hỗ trợ đổi size</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Hàng chính hãng 100%</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Chất lượng tuyệt đối</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Cơ sở</h6>
          <p>
            <a href="#!" class="text-reset">Thành Phố Hà Nội</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Thành Phố Hồ Chí Minh</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Thành Phố Đà Nẵng</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Thành Phố Hải Phòng</a>
          </p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Nhóm 17 _ Dự án 1 _ Cao Đăng FPT POLYTECHNIC</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</html>