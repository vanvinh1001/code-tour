<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới booking</title>
    <?php $this->view('frontend.public.base')?>

</head>
<body>
<?php $this->view('frontend.public.header')?>
<a href="./index.php?controller=booking">
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
<div style="transform: translateX(0);" class="container mt-2 animate__animated animate__fadeIn">
  <form method="POST" action="./index.php?controller=booking&action=store" class="needs-validation mt-5" novalidate>
    <div class="form-row">
        <div class="col-md-4 mb-4">
            <label for="users">Tên khách hàng</label>
                <select id="users" class="form-control" name="users">
                    <?php foreach($users as $item){
                          echo "<option value='${item['fullname']}'> ${item['fullname']}</option>";
                      } ?>
                </select>
        </div>
        <div class="col-md-4 mb-4">
            <label for="tours">Tên tour</label>
                <select id="tours" class="form-control" name="tours">
                    <?php foreach($tours as $item){
                          echo "<option value='${item['name']}'> ${item['name']}</option>";
                      } ?>
                </select>
        </div>
    </div>

    <div class="form-row">

    </div>
    
    <div class="form-row">
        <div class="col-md-4 mb-4">
            <label for="text">Số lượng người đi</label>
                    <input name="quantity" type="text" class="form-control" id="quantity" name="quantity" placeholder="Số lượng người đi"
                        value="" required>
                        <div class="invalid-feedback">
                            Nhập số lượng người đi
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
