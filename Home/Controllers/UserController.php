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
        

        public function editUser($alert=''){
            $id = $_GET['id'];
            $users = $this->userModel->findById($id);
            return $this->view('frontend.user.edit',
            [
                'users' => $users,
                'id' => $id,
                'alert' => $alert,
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
                $data = [
                            'fullname' => $fullname,
                            'email' => $email,
                            'idcard' => $idcard,
                            'tel' => $phone,
                            'password' => $password,
                            'dob' => $dob,

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
                    header("Location: ./index.php?controller=user&action=detail");
                }
                
            }

        }

        public function detail(){
            session_start();
            $userphone = $_SESSION["phone"];
            $users = $this->userModel->getInfoUser('tel', $userphone);

            return $this->view('frontend.user.detail',[
                'users' => $users,
            ]);
            // var_dump($users);
        }
    } 
?>