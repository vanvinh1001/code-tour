<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý hướng dẫn viên</title>
    <?php $this->view('frontend.public.base')?>

</head>
<body>
<?php $this->view('frontend.public.header')?>
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
            <th scope="col">STT</th>
            <th scope="col">Họ tên</th>
            <th scope="col">Ngày sinh</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">sửa</th>
            <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody class="row-table">
            <?php 
                for($i = 0; $i < count($tourguider); $i++){
                    $stt = $i + 1;
                    echo 
                    "
                        <td>$stt</td>
                        <td>".$tourguider[$i]["name"]."</td>
                        <td>".$tourguider[$i]["dob"]."</td>
                        <td>".$tourguider[$i]["tell"]."</td>
                        <td><a href='./index.php?controller=tourguider&action=editTourguider&id=".$tourguider[$i]["id_tourguider"]."'><i class='editBtn fas fa-edit'></i></a></td>
                        <td><a href='./index.php?controller=tourguider&action=delete&id=".$tourguider[$i]["id_tourguider"]."'><i class='removeBtn fas fa-trash-alt'></i></a></td>
                    </tr>";
                }
            ?>
        </tbody>
        </table>
        <nav aria-label="...">
            <ul class="pagination mt-3 ml-3">
                <?php 
                    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                    for($i = 1; $i<=$toltalPage;$i++){
                        echo "
                        <li class='page-item ";
                        if($i==$current_page) echo "active";
                        
                        echo"'><a class='page-link' href='./index.php?controller=tourguider&action=index&page=$i'>$i</a></li>";
                    }
                ?>
            </ul>
        </nav>
        <a href="./index.php?controller=tourguider&action=addtourguider">
        <button type="button" class="mt-2 btn createBtn btn-primary">Thêm mới</button>
        </a>
<?php $this->view('frontend.public.footer') ?>
</body>
</html>
