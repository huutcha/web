<?php 
require 'connect.php';
require 'process-std.php';
?>
<?php 
include 'inc/header.php';
include 'inc/sidebar.php';
 ?>

<div class="content">
	<h1 class="title">Thêm sinh viên mới</h1>
	<form class="needs-validation form form-darkmode" action="" method="post" novalidate>
	  <div class="form-group">
	    <label for="stdID">Mã Sinh Viên</label>
	    <input type="text" class="form-control" name="stdID" id="stdID" placeholder="VD: 519CNT016" required>
	    <div class="invalid-tooltip">
	       Vui lòng nhập họ và tên
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="fullname">Họ và tên</label>
	    <input type="text" class="form-control"  name="fullname" id="fullname" placeholder="VD: Đinh Văn Hữu" required>
	    <div class="invalid-tooltip">
	       Vui lòng nhập họ và tên
	    </div>
	  </div>
	  <div class="form-group d-flex">
	  	<label class="mr-4">Giới tính</label>
	  	<div class="custom-control custom-radio mr-4 ml-4">
		  <input type="radio" id="male" name="gender" value="Nam" class="custom-control-input" required>
		  <label class="custom-control-label" for="male">Nam</label>
		</div>
		<div class="custom-control custom-radio">
		  <input type="radio" id="female" name="gender" value="Nữ" class="custom-control-input" required>
		  <label class="custom-control-label" for="female">Nữ</label>
		</div>
	  </div>
	  <div class="form-group">
	  	<label for="date" class="mr-4">Ngày sinh</label>
	  	<input type="date" name="date"  id="date" required>
	  </div>
	  <div class="form-group">
	    <label for="mobile">Số điện thoại</label>
	    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="VD: 0989496291" required>
	    <div class="invalid-tooltip">
	       Vui lòng nhập số điện thoại
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="address">Quê Quán</label>
	    <input type="text" class="form-control" name="address" id="address" placeholder="VD: Hà Nội" required>
	    <div class="invalid-tooltip">
	       Vui lòng nhập quê quán
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="classID">Mã Lớp Học</label>
	    <input type="text" class="form-control" name="classID" id="classID" placeholder="VD: 519CNT" required>
	    <div class="invalid-tooltip">
	       Vui lòng nhập mã lớp học
	    </div>
	  </div>
	  <div class="separate-row mt-4"></div>
	  <button type="submit" class="btn btn-darkmode mt-4">Xác nhận</button>
	</form>
	
</div>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<?php 
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$stdID = $_POST['stdID'];
		$fullname = $_POST['fullname'];
		$gender = $_POST['gender'];
		$date = $_POST['date'];
		$mobile = $_POST['mobile'];
		$address = $_POST['address'];
		$classID = $_POST['classID'];
		handleStd("INSERT INTO `sinhvien`(`ID`,`MaSV`, `TenSV`, `GioiTinh`, `NgaySinh`, `SDT`, `DiaChi`, `MaLop`) VALUES ('','$stdID','$fullname','$gender','$date','$mobile','$address','$classID')");
	}
 ?>



<?php include 'inc/footer.php'; ?>
<?php $conn->close(); ?>