<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý địa điểm du lịch</title>
    <?php $this->view('frontend.public.base')?>

</head>
<body>
    <?php $this->view('frontend.public.header')?>
    <div class="tableFixHead table-responsive">
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên địa điểm</th>
                <th scope="col">Miêu tả</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody class="row-table">
                <?php 
                    for($i = 0; $i < count($places); $i++){
                        $stt = $i + 1;
                        echo 
                        "<tr class='row-content'>
                            <td>$stt</td>
                            <td>".$places[$i]["name"]."</td>
                            <td>".$places[$i]["description"]."</td>
                            <td><a href='./index.php?controller=place&action=editplace&id=".$places[$i]["id_place"]."'><i class='editBtn fas fa-edit'></i></a></td>
                            <td><a href='./index.php?controller=place&action=delete&id=".$places[$i]["id_place"]."'><i class='removeBtn fas fa-trash-alt'></i></a></td>
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
                            
                            echo"'><a class='page-link' href='./index.php?controller=place&action=index&page=$i'>$i</a></li>";
                        }
                    ?>
                </ul>
            </nav>
            <a href="./index.php?controller=place&action=addplace">
            <button type="button" class="mt-2 btn createBtn btn-primary">Thêm mới</button>
            </a>
    </div>
    <?php $this->view('frontend.public.footer') ?>
</body>
</html>
