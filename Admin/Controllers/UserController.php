<?php 
    class UserController extends BaseController{
        private $userModel;
        private $roleModel;
        public function __construct()
        {
            $this->loadModel("UserModel");
            $this->loadModel("RoleModel");
            $this->userModel = new UserModel();
            $this->roleModel = new RoleModel();
        }
        
        public function index(){
                        // Phân trang
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $postOnePage = 6; // Số bài viết hiển thị trong 1 trang.
                        // Khi đã có tổng số bài viết và số bài viết trong một trang ta có thể tính ra được tổng số trang
            $startRecord = ($current_page - 1) * $postOnePage;
            $users = $this->userModel->getAllLimit($startRecord, $postOnePage);
            $toltalPage = ceil(count($this->userModel->getAll())/$postOnePage);
            // $users = $this->userModel->getAll();
            $roles = [];
            foreach ($users as $item) {
                array_push($roles, $this->roleModel->getInfoRole('id_role', $item['id_role']));
            }
            return $this->view('frontend.user.index',[
                "users" => $users,
                "roles" =>$roles,
                "toltalPage" => $toltalPage,
            ]);
            
        }
        public function adduser($alert=''){
            $roles = $this->roleModel->getAll();
            return $this->view('frontend.user.add',[
                'alert' => $alert,
                'roles' => $roles,
            ]);
        }

        public function store(){
            if(!empty($_POST)){
                $fullname = $_POST["fullname"];
                $email = $_POST["email"];
                $idcard = $_POST["idcard"];
                $phone = $_POST["tel"];
                $password = $_POST["password"];
                $dob = $_POST["dob"];
                $role = $_POST["name"];
                $id_role = $this->roleModel->getInfoRole('name', $role)['id_role'];
                $data = [
                            'fullname' => $fullname,
                            'email' => $email,
                            'idcard' => $idcard,
                            'tel' => $phone,
                            'password' => $password,
                            'dob' => $dob,
                            'id_role' =>$id_role,

                        ];

                if($this->userModel->checkExist("email",$email)){
                    $alert = "Email đã được đăng ký";
                    $this->adduser($alert);
                }
                else if($this->userModel->checkExist("phone",$phone)){
                    $alert = "Số điện thoại` đã được đăng ký";
                    $this->adduser($alert);
                }
                else{
                    $this->userModel->store($data);
                        header("Location: ./index.php?controller=user");
                    }
                
            }
        }
        public function editUser($alert=''){
            $id = $_GET['id'];
            $users = $this->userModel->findById($id);
            $roles = $this->roleModel->getAll();
            return $this->view('frontend.user.edit',
            [
                'users' => $users,
                'id' => $id,
                'alert' => $alert,
                'roles' =>$roles,
            ]);
        }
        public function update(){
            if(isset($_POST) && isset($_GET)){
                $id = $_GET["id"];
                $fullname = $_POST["fullname"];
                $email = $_POST["email"];
                $idcard = $_POST["idcard"];
                $phone = $_POST["tel"];
                $password = $_POST["password"];
                $dob = $_POST["dob"];
                $role = $_POST["name"];
                $id_role = $this->roleModel->getInfoRole('name', $role)['id_role'];
                $data = [
                            'fullname' => $fullname,
                            'email' => $email,
                            'idcard' => $idcard,
                            'tel' => $phone,
                            'password' => $password,
                            'dob' => $dob,
                            'id_role' => $id_role,

                        ];
                if($this->userModel->checkExitsUpdate("email",$email,$id)){
                    $alert = "Email đã được đăng ký";
                    $this->edituser($alert);
                }
                else if($this->userModel->checkExitsUpdate("tel",$phone,$id)){
                    $alert = "Số điện thoại đã được đăng ký";
                    $this->edituser($alert);
                }
                else{
                    $this->userModel->updateData($id,$data);
                    header("Location: ./index.php?controller=user");
                }
                
            }

        }
        public function delete(){
            $id = $_GET['id'];
            $this->userModel->deleteData($id);
            // header("Location: ./index.php?controller=user");
            
        }
    } 
?>