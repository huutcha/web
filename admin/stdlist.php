<?php require './connect.php'; ?>
<?php require './process-std.php';
	$stds = getStds("SELECT * FROM sinhvien");
	$i = 0;
 ?>
 <?php 
 	include 'inc/header.php';
 	include 'inc/sidebar.php';
  ?>
<div class="content">
	<div class="d-flex justify-content-between align-items-center">
		<h1 class="title">Danh sách sinh viên</h1>
		<a href="addstd.php" style="height: 50%" class="btn btn-darkmode">Thêm sinh viên mới</a>
	</div>
	<table class="table-striped  table-dark-mode table  mt-4">
	  <thead class="thead-dark-mode">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Mã sinh viên</th>
	      <th scope="col">Họ và tên</th>
	      <th scope="col">Giới tính</th>
	      <th scope="col">Ngày sinh</th>
	      <th scope="col">Quê quán</th>
	      <th colspan="2"></th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php foreach ($stds as $std) : ?>
	    <tr>
	      <th scope="row"><?= ++$i ?></th>
	      <td><?= $std['MaSV'] ?></td>
	      <td><?= $std['TenSV'] ?></td>
	      <td><?= $std['GioiTinh'] ?></td>
	      <td><?= $std['NgaySinh'] ?></td>
	      <td><?= $std['DiaChi'] ?></td>
	      <td><a href="editstd.php?stdID=<?= $std['ID'] ?>" class="btn btn-darkmode"><i class="far fa-edit"></i></a></td>
	      <td><a href="" class="btn btn-darkmode" data-toggle="modal" data-target="#delete-modal" data-id="<?= $std['ID'] ?>"><i class="far fa-trash-alt"></i></a></td>
	    </tr>
	    <?php endforeach ?>
	  </tbody>
	</table>
</div>
<div class="modal" tabindex="-1" id="delete-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Xóa sinh viên</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Dữ liệu sau khi xóa không thể khôi phục. Bạn chắc chắn muốn xóa</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
        <a href="" class="btn btn-danger" id="delete-btn">Xác nhận</a>
      </div>
    </div>
  </div>
</div>
<script>
	$('#delete-modal').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) ;
	  var stdID = button.data('id') ;
	  var delBtn = document.querySelector('#delete-btn');
	  delBtn.href = 'delstd.php?stdID=' + stdID;
	});
</script>
<?php include 'inc/footer.php'; ?>
<?php $conn->close() ?>