<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý khách sạn</title>
    <?php $this->view('frontend.public.base')?>

</head>
<body>
<?php $this->view('frontend.public.header')?>
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên khách sạn</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">sửa</th>
            <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody class="row-table">
            <?php 
                for($i = 0; $i < count($hotel); $i++){
                    $stt = $i + 1;
                    echo 
                    "
                        <td>$stt</td>
                        <td>".$hotel[$i]["name"]."</td>
                        <td>".$hotel[$i]["address"]."</td>
                        <td>".$hotel[$i]["tell"]."</td>
                        <td><a href='./index.php?controller=hotel&action=editHotel&id=".$hotel[$i]["id_hotel"]."'><i class='editBtn fas fa-edit'></i></a></td>
                        <td><a href='./index.php?controller=hotel&action=delete&id=".$hotel[$i]["id_hotel"]."'><i class='removeBtn fas fa-trash-alt'></i></a></td>
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
                        
                        echo"'><a class='page-link' href='./index.php?controller=hotel&action=index&page=$i'>$i</a></li>";
                    }
                ?>
            </ul>
        </nav>
        <a href="./index.php?controller=hotel&action=addhotel">
        <button type="button" class="mt-2 btn createBtn btn-primary">Thêm mới</button>
        </a>
<?php $this->view('frontend.public.footer') ?>
</body>
</html>
