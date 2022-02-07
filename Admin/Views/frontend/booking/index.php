<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý danh sách booking</title>
    <?php $this->view('frontend.public.base')?>

</head>
<body>
<?php $this->view('frontend.public.header')?>
    <table class="table table-bordered">
    <thead >
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Tên tour</th>
                    <th scope="col">Ngày đi</th>
                    <th scope="col">Ngày về</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Tổng giá trị</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody class="row-table">
                <?php 
                            $STT = 0;
                            for($i=0; $i < count($tours); $i++){
                                // Sửa đường dẫn ảnh
                                $url_image = $tours[$i]['thumbnail'];
                                $STT = $i+1;
                                echo 
                                "<tr class='row-content'>
                                    <td>$STT</td>
                                    <td>".$users[$i]["fullname"]."</td>
                                    <td>".$tours[$i]["name"]."</td>
                                    <td>".$tours[$i]["datego"]."</td>
                                    <td>".$tours[$i]["dateback"]."</td>
                                    <td>".$booking[$i]["quantity"]."</td>
                                    <td>".$toltal[$i]."</td>

                                <td><a href='./index.php?controller=booking&action=editbooking&id=".$booking[$i]["id_booking"]."'><i class='editBtn fas fa-edit'></i></a></td>
                                <td><a href='./index.php?controller=booking&action=delete&id=".$booking[$i]["id_booking"]."'><i class='removeBtn fas fa-trash-alt'></i></a></td>
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
                        
                        echo"'><a class='page-link' href='./index.php?controller=booking&action=index&page=$i'>$i</a></li>";
                    }
                ?>
            </ul>
        </nav>
        <a href="./index.php?controller=booking&action=addbooking">
        <button type="button" class="mt-2 btn createBtn btn-primary">Thêm mới</button>
        </a>
<?php $this->view('frontend.public.footer') ?>
</body>
</html>
