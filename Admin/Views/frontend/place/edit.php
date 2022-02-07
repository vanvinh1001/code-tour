<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin người dùng</title>
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
<div  class="container mt-2 animate__animated animate__fadeIn">
  <form method="POST" action="./index.php?controller=place&action=update&id=<?php echo $_GET["id"]?>" class="needs-validation mt-5" novalidate>
    <div class="form-row col-md-6">
      <div class="col-md-12 mb-4">
          <label class="form-label" for ="name">Nơi đến</label>
          <input type="text" class="form-control" id="name" value="<?php echo $places["name"] ?>" name="name" placeholder="Nhập nơi đến" required>
          <div class="invalid-feedback">
              Nhập nơi đến
          </div>
        </div>
        <div class="col-md-12 mb-4">
        <label class="form-label" for ="description">Mô tả</label>
          <textarea name="description" class="form-control" id="description" cols="50" rows="10" placeholder="Mô tả" required value="<?php echo $places["description"] ?>"><?php echo $places["description"] ?></textarea>
          <div class="invalid-feedback">
                Mô tả
          </div>
        </div>
    </div>


    <button id="submitBtn" class="btn btn-primary" type="submit">Cập nhật</button>  
  </form>
</div>
<!-- <?php $this->view('frontend.public.footer')?>
<?php $this->view('frontend.public.js.boostrapJS') ?> -->

</script>
</body>
</html>
