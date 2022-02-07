<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới nơi đến</title>
    <?php $this->view('frontend.public.base')?>

</head>

<body>
  <?php $this->view('frontend.public.header')?>
  <a href="./index.php?controller=place">
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
  <form method="POST" action="./index.php?controller=place&action=store" class="needs-validation mt-5" novalidate>
    <div class="form-row">
        <div class="col-md-4 mb-4">
          <label for="name">Nơi đến </label>
          <input type="text" class="form-control" id="name" 
            name="name" placeholder="Nơi đến" value="" required>
          <div class="invalid-feedback">
              Nhập nơi đến
          </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-4">
          <label for="description">Decription</label>
          <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="" required>
          <div class="invalid-feedback">
                Description
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
