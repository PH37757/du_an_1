<footer class="main-footer">
    <!-- <strong>Copyright &copy; 2014-2021</strong>
    All rights reserved. -->

  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script>
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
<!-- jQuery -->
<script src="../../config/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../config/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../config/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../config/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../config/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../config/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../config/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../config/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../config/plugins/moment/moment.min.js"></script>
<script src="../../config/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../config/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../config/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../config/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../config/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../config/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../config/dist/js/pages/dashboard.js"></script>
</body>
</html>
