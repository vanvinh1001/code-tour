<?php
class RoleController extends BaseController
{
    private $roleModel;

    public function __construct()
    {
        $this->loadModel("RoleModel");
        $this->roleModel = new RoleModel();
    }

    public function index()
    {
        $role = $this->roleModel->getAll();

        return $this->view('frontend.role.index', [
            'role' => $role
        ]);
    }
    public function addRole($alert = '')
    {
        return $this->view('frontend.role.add', [
            'alert' => $alert
        ]);
    }

    public function store()
    {
        if (isset($_POST["rolename"]) && isset($_POST["description"])) {
            $rolename = $_POST["rolename"];
            if (!isset($_POST["description"])) {
                $descriptionStr = 'Người dùng';
            } else {
                $descriptionArr = $_POST["description"];
                $descriptionStr = implode(", ", $descriptionArr);
            }
            $data = [
                'name' => $rolename,
                'description' => $descriptionStr

            ];
            if ($this->roleModel->checkExist("rolename", $rolename)) {
                $this->addRole('Tên nhóm quyền đã tồn tại');
            } else {
                $this->roleModel->store($data);
                header("Location: ./index.php?controller=role");
            }
        } else {
            $this->addRole('Vui lòng chọn chức năng');
        }
        
    }
    public function editRole($alert = '')
    {
        $id = $_GET['id'];
        $role = $this->roleModel->findById($id);
        return $this->view('frontend.role.edit', [
            "role" => $role,
            "alert" => $alert,
            "id" => $id

        ]);
    }
    public function update()
    {
        if (!empty($_POST) && !empty($_GET)) {
            $id = $_GET['id'];
            $role = $_POST["rolename"];
            if (!isset($_POST["description"])) {
                $descriptionStr = 'Người dùng';
            } else {
                $descriptionArr = $_POST["description"];
                $descriptionStr = implode(", ", $descriptionArr);
            }
            $data = [
                'rolename' => $role,
                'description' => $descriptionStr

            ];
            if ($this->roleModel->checkExitsUpdate("rolename", $role, $id)) {
                $alert = "Tên nhóm quyền đã tồn tại";
                $this->editRole($alert);
            } else {
                $this->roleModel->updateData($id, $data);
                header("Location: ./index.php?controller=role");
            }
        }
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->roleModel->deleteData($id);
        header("Location: ./index.php?controller=role");
    }
}
