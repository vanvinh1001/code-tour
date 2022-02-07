<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa nhóm quyền</title>
    <?php $this->view('frontend.public.base')?>

</head>

<body>
    <?php $this->view('frontend.public.header')?>
    <a href="./index.php?controller=role">
        <i class="fas fa-times close-btn"></i>
    </a>
    <div class="container mt-5 animate__animated animate__fadeIn">
        <?php 
  if($alert != ''){
      echo 
      "<div class='alert alert-danger' id='success-alert' style='top:100px'>
      <strong>$alert !</strong>
      </div>";
  }
?>
        <h2 style="color:blue">Thông tin nhóm quyền</h2>
        <form method="POST" action="./index.php?controller=role&action=update&id=<?php echo $_GET["id"]?>"
            class="needs-validation mt-5" novalidate>
            <div class="form-row">
                <div class="col-md-6 mb-6">
                    <label for="">Tên nhóm quyền</label>
                    <input type="text" class="form-control" id="" name="rolename" placeholder="Tên nhóm quyền"
                        value="<?php echo $role["name"] ?>" required>
                    <div class="invalid-feedback">
                        Nhập tên nhóm quyền
                    </div>
                    <button id="submitBtn" class="mt-4 btn btn-primary" type="submit">Cập nhật</button>
                </div>
                <div class="col-md-6 mb-6">
                    <h4>Vai trò</h4>
                    <div class="custom-control custom-checkbox mt-3">
                        <input type="checkbox" name="description[]" class="custom-control-input" value="Quản trị hệ thống"
                            id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Quản trị hệ thống</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-3">
                        <input type="checkbox" name="description[]" class="custom-control-input"
                            value="Vai trò" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">Nhân viên</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-3">
                        <input type="checkbox" name="description[]" class="custom-control-input" value="Quản lý"
                            id="chucnang3">
                        <label class="custom-control-label" for="chucnang3">Quản lý</label>
                    </div>
                    <div class="custom-control custom-checkbox mt-3">
                        <input type="checkbox" name="description[]" class="custom-control-input" value="Người dùng"
                            id="chucnang4">
                        <label class="custom-control-label" for="chucnang4">Người dùng</label>
                    </div>
                </div>

            </div>

        </form>

    </div>
    <?php $this->view('frontend.public.js.boostrapJS') ?>

</body>

</html>