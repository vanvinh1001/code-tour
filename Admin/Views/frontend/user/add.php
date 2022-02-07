<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới tài khoản người dùng</title>
    <?php $this->view('frontend.public.base')?>

</head>
<body>
<?php $this->view('frontend.public.header')?>
<a href="./index.php?controller=user">
    <i class="fas fa-times close-btn"></i>
</a>
<?php 
  if($alert != ''){
      echo 
      "<div class='alert alert-danger' id='success-alert' style='top:100px'>
      <strong>$alert !</strong>
      </div>";
  }
?>
<div style="transform: translateX(20%);" class="container mt-2 animate__animated animate__fadeIn">
  <form method="POST" action="./index.php?controller=user&action=store" class="needs-validation mt-5" novalidate>
    <div class="form-row">
        <div class="col-md-4 mb-4">
          <label for="idcard">Số CMND/CCCD</label>
          <input type="text" class="form-control" id="idcard" name="idcard" placeholder="Số CMND/CCCD" value="" required>
          <div class="invalid-feedback">
              Nhập CMND/CCCD
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <label for="fullname">Họ tên</label>
          <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Họ tên" value="" required>
          <div class="invalid-feedback">
              Nhập Họ tên
          </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-4">
          <label for="tel">Số điện thoại</label>
          <input type="tel" class="form-control" id="tel" name="tel" placeholder="Số điện thoại" value="" required>
          <div class="invalid-feedback">
              Nhập tên số điện thoại
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="" required>
          <div class="invalid-feedback">
              Nhập địa chỉ email
          </div>
        </div>
    </div>
    <div class="form-row">
      <div class="col-md-4 mb-4">
        <label for="">Mật khẩu</label>
        <input type="password" class="form-control" id="" name="password" placeholder="Mật khẩu" value="" required>
        <div class="invalid-feedback">
              Nhập mật khẩu
          </div>
      </div>
      <div class="col-md-4 mb-4">
          <label for="dob">Ngày sinh</label>
          <input type="date" class="form-control" id="dob" name="dob" placeholder="Ngày sinh" value="" required>
          <div class="invalid-feedback">
              Nhập ngày sinh
          </div>
        </div>
    </div>
    <div class="form-row">
      <div class="col-md-4 mb-4">
          <label for="role">Vai trò</label>
          <select option class="form-control" id="role" name="name" required>
          <?php 
              foreach($roles as $item){
                echo 
                "<option>${item["name"]}</option>";
            }
            ?>
          </select>
          <div class="invalid-feedback">
              Nhập nhóm quyền
          </div>
        </div>
      </div>
    <button id="submitBtn" class="btn btn-primary" type="submit">Thêm mới</button>  
  </form>
</div>
<?php $this->view('frontend.public.footer')?>
<?php $this->view('frontend.public.js.boostrapJS') ?>

</script>
</body>
</html>
