<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý nhóm quyền</title>
    <?php $this->view('frontend.public.base')?>

</head>

<body>
    <?php $this->view('frontend.public.header')?>
    <div class="tableFixHead table-responsive">
        <table class="table table-bordered">
            <thead >
                <tr>
                    <th scope="col">ID nhóm quyền</th>
                    <th scope="col">Tên nhóm quyền</th>
                    <th scope="col">Vai trò</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody class="row-table">
                <?php 
                            foreach($role as $item){
                                echo 
                                "<tr class='row-content'>
                                    <td>${item["id_role"]}</td>
                                    <td>${item["name"]}</td>
                                    <td>${item["description"]}</td>
                                    <td><a href='./index.php?controller=role&action=editRole&id=${item["id_role"]}'><i class='editBtn fas fa-edit'></i></a></td>
                                    <td><a href='./index.php?controller=role&action=delete&id=${item["id_role"]}'><i class='removeBtn fas fa-trash-alt'></i></a></td>
                                </tr>";
                            }
                        ?>
            </tbody>
        </table>
        <a href="./index.php?controller=role&action=addRole">
            <button type="button" class="mt-2 btn createBtn btn-primary">Thêm mới</button>
        </a>
    </div>

    <?php $this->view('frontend.public.footer') ?>
</body>

</html>