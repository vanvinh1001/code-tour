<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin khách sạn</title>
    <?php $this->view('frontend.public.base')?>

</head>
<body>
<?php $this->view('frontend.public.header')?>
<a href="./index.php?controller=hotel">
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
  <form method="POST" action="./index.php?controller=hotel&action=update&id=<?php echo $_GET["id"]?>" class="needs-validation mt-5" novalidate>
    <div class="form-row">
      <div class="col-md-4 mb-4">
          <label for="name">Tên khách sạn</label>
          <input type="text" class="form-control" id="name" value="<?php echo $hotel["name"] ?>" name="name" placeholder="Tên khách sạn" value="" required>
          <div class="invalid-feedback">
              Nhập tên khách sạn
          </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-4">
          <label for="">Địa chỉ</label>
          <input type="text" class="form-control" id="address" value="<?php echo $hotel["address"] ?>" name="address" placeholder="Địa chỉ" value="" required>
          <div class="invalid-feedback">
              Nhập địa chỉ
          </div>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-4 mb-4">
          <label for="">Số điện thoại</label>
          <input type="tell" class="form-control" id="" value="<?php echo $hotel["tell"] ?>" name="tell" placeholder="Số điện thoại" value="" required>
          <div class="invalid-feedback">
              Nhập tên số điện thoại
          </div>
        </div>
    </div>

    <button id="submitBtn" class="btn btn-primary" type="submit">Cập nhật</button>  
  </form>
</div>
<?php $this->view('frontend.public.footer')?>
<?php $this->view('frontend.public.js.boostrapJS') ?>

</script>
</body>
</html>
