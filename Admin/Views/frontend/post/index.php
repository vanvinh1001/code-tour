<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí post</title>
    <?php $this->view('frontend.public.base')?>

</head>

<body>
    <?php $this->view('frontend.public.header')?>
    <div class="tableFixHead table-responsive">
        <table class="table table-bordered">
            <thead >
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Ảnh đại diện</th>
                    <th scope="col">Tên post</th>
                    <th scope="col">Người post</th>
                    <th scope="col">Ngày post</th>
                    <th scope="col">Chi tiết</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody class="row-table">
                <?php 
                            $STT = 0;
                            for($i=0; $i < count($post); $i++){
                                // Sửa đường dẫn ảnh
                                $url_image = $this->fixUrl($post[$i]['thumbnail']);
                                
                                $STT = $i+1;
                                echo 
                                "<tr class='row-content'>
                                    <td>$STT</td>
                                    <td><img class='thumbnail-img' src='$url_image' alt='Ảnh ".$post[$i]["name"]."' style='width:100px'></td>
                                    <td>".$post[$i]["name"]."</td>
                                    <td>".$user[$i]["fullname"]."</td>
                                    <td>".$post[$i]["datepost"]."</td>
                                    <td><a href='./index.php?controller=post&action=detail&id=".$post[$i]['id_post']."'><i class='editBtn far fa-eye'></i></a></td>
                                    <td><a href='./index.php?controller=post&action=editpost&id=".$post[$i]["id_post"]."'><i class='editBtn fas fa-edit'></i></a></td>
                                    <td><a href='./index.php?controller=post&action=delete&id=".$post[$i]["id_post"]."'><i class='removeBtn fas fa-trash-alt'></i></a></td>
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
                        
                        echo"'><a class='page-link' href='./index.php?controller=post&action=index&page=$i'>$i</a></li>";
                    }
                ?>
            </ul>
        </nav>
        <a href="./index.php?controller=post&action=addpost">
            <button type="button" class="mt-2 btn createBtn btn-primary">Thêm mới</button>
        </a>
    </div>

    <?php $this->view('frontend.public.footer') ?>
</body>

</html>