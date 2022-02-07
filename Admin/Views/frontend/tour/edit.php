<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin tour</title>
    <?php $this->view('frontend.public.base')?>

</head>

<body>
    <?php $this->view('frontend.public.header')?>
    <a href="./index.php?controller=tour">
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
        <form enctype="multipart/form-data" method="POST" action="./index.php?controller=tour&action=update&id=<?php echo $_GET["id"]?>"
            class="needs-validation mt-5" novalidate>
            <div class="form-row">
                <div class="col-md-8">
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="name">Tên tour</label>
                            <input type="text" class="form-control" id="name" value="<?php echo $tours["name"] ?>"
                                name="name" placeholder="Tên tour" value="" required>
                            <div class="invalid-feedback">
                                Nhập tên tour 
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <textarea style="resize: none; padding:10px" name="description" id="description"
                                value="<?= $tours["description"]?>"><?= $tours["description"]?></textarea>
                            <button id="submitBtn" class="btn btn-primary mt-3" type="submit">Cập nhật</button>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="places">Nơi đến</label>
                            <select id="place" class="form-control" name="place">
                                <?php foreach($places as $item){
                          echo "<option value='${item['name']}'> ${item['name']}</option>";
                      } ?>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="hotels">Khách sạn</label>
                            <select id="hotel" class="form-control" name="hotel">
                                <?php foreach($hotels as $item){
                          echo "<option value='${item['name']}'> ${item['name']}</option>";
                      } ?>
                            </select>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="tourguider">Hướng dẫn viên</label>
                            <select id="tourguider" class="form-control" name="tourguider">
                                <?php foreach($tourguider as $item){
                          echo "<option value='${item['name']}'> ${item['name']}</option>";
                      } ?>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="datego">Ngày đi</label>
                            <input type="date" class="form-control" id="datego" name="datego" placeholder="Ngày đi"
                                value="<?php echo $tours["datego"] ?>" required>
                            <div class="invalid-feedback">
                                Nhập ngày đi
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="dateback">Ngày về</label>
                            <input type="date" class="form-control" id="dateback" name="dateback" placeholder="Ngày về"
                                value="<?php echo $tours["dateback"] ?>" required>
                            <div class="invalid-feedback">
                                Nhập ngày về
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="price">Gía / 1 người</label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="Gía / 1 người"
                                value="<?php echo $tours["price"] ?>" required>
                            <div class="invalid-feedback">
                                Nhập gía / 1 người
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="seats">Số chỗ</label>
                            <input type="text" class="form-control" id="seats" name="seats" placeholder="Số chỗ"
                                value="<?php echo $tours["seats"] ?>" required>
                            <div class="invalid-feedback">
                                Nhập số chỗ
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="vehicel">Phương tiện</label>
                            <input type="text" class="form-control" id="vehicel" name="vehicel"
                                placeholder="Phương tiện" value="<?php echo $tours["vehicel"] ?>" required>
                            <div class="invalid-feedback">
                                Nhập phương tiện
                            </div>
                        </div>
                        <div class="col-md-12 mb-12">
                            <label class="form-label" for="thumbnail">Ảnh đại diện</label>
                            <img class='thumbnail-img' src="<?= $this->fixUrl($tours["thumbnail"],"../") ?>" alt="">
                            <input type="file" accept=".jpg, .png, .jpeg, .gif" class="form-control" id="thumbnail"
                                name="thumbnail">
                        </div>
                        <div class="col-md-12 mb-12">
                            <label class="form-label" for="galleries">Ảnh chi tiết</label>
                            <<input multiple="multiple" accept=".jpg, .png, .jpeg, .gif" type="file" class="form-control" id="galleries" name="galleries[]"
                    >
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