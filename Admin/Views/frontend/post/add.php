<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm post</title>
    <?php $this->view('frontend.public.base')?>

</head>

<body>
    <?php $this->view('frontend.public.header')?>
    <a href="./index.php?controller=post">
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
    <div class="container mt-2 animate__animated animate__fadeIn">
        <form enctype="multipart/form-data" method="POST" action="./index.php?controller=post&action=store"
            class="needs-validation mt-5" novalidate>
            <div class="form-row">
                <div class="col-md-8">
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="name">Tên post</label>
                            <input type="text" class="form-control" id="name" value="" name="name" placeholder="Tên post" value="" required>
                            <div class="invalid-feedback">
                                Nhập tên post
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <textarea style="resize: none; padding:10px" name="description" id="description"
                                value=""></textarea>
                            <button id="submitBtn" class="btn btn-primary mt-3" type="submit">Thêm mới</button>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="user">Người post</label>
                            <select id="user" class="form-control" name="user">
                                <?php foreach($user as $item){
                          echo "<option value='${item['fullname']}'> ${item['fullname']}</option>";
                      } ?>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="datepost">Ngày post</label>
                            <input type="date" class="form-control" id="datepost" name="datepost" placeholder="Ngày post"
                                value="datepost" required>
                            <div class="invalid-feedback">
                                Nhập ngày post
                            </div>
                        </div>
                        <div class="col-md-12 mb-12">
                            <label class="form-label" for="avatar">Anh đại diện</label>
                            <input type="file" accept=".jpg, .png, .jpeg, .gif" class="form-control" id="avatar" name="avatar" placeholder="Ảnh đại diện" required>
                            <div class="invalid-feedback">
                                Nhập ảnh đại diện
                            </div>
                        </div>
                        <div class="col-md-12 mb-12">
                            <label class="form-label" for="details">Ảnh chi tiết</label>
                            <input multiple="multiple" accept=".jpg, .png, .jpeg, .gif" required type="file" class="form-control" id="detaisl" name="details[]" placeholder="Ảnh chi tiết">
                            <div class="invalid-feedback">
                                Chọn ảnh chi tiết
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php $this->view('frontend.public.footer')?>
    <?php $this->view('frontend.public.js.boostrapJS') ?>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
    $('#description').summernote({
        placeholder: 'Mô tả sản phẩm',
        tabsize: 2,
        height: 300,
        width: 690,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
    </script>
</body>

</html>