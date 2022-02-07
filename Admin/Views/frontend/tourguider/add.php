<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới hướng dẫn viên</title>
    <?php $this->view('frontend.public.base')?>

</head>
<body>
<?php $this->view('frontend.public.header')?>
<a href="./index.php?controller=tourguider">
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
  <form method="POST" action="./index.php?controller=tourguider&action=store" class="needs-validation mt-5" novalidate>
    <div class="form-row">
        <div class="col-md-4 mb-4">
          <label for="name">Họ tên</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Họ tên" value="" required>
          <div class="invalid-feedback">
              Nhập Họ tên
          </div>
        </div>
        </div>

    <div class="form-row">
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
          <label for="tell">Số điện thoại</label>
          <input type="tell" class="form-control" id="tell" name="tell" placeholder="Số điện thoại" value="" required>
          <div class="invalid-feedback">
              Nhập số điện thoại
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
