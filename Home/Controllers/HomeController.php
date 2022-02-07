<?php 
    class HomeController extends BaseController{
        private $userModel;

        public function __construct()
        {
            $this->loadModel("UserModel");
            $this->userModel = new UserModel();
        }
        
        public function index($alert='',$success=''){
           return $this->view('frontend.home.index',[
               "alert" => $alert,
               "success" => $success,

           ]);
        }
        // Đăng ký tài khoản
        public function register(){
           if(isset($_POST)){
              $fullname = $_POST["fullname"];
              $cmnd = $_POST["cmnd"];
              $dob = $_POST["dob"];
              $phone = $_POST["phone"];
              $email = $_POST["email"];
              $password = $_POST["password"];

              $data = [
                  "fullname" => $fullname,
                  "idcard" => $cmnd,
                  "dob" => $dob,
                  "tel" => $phone,
                  "email" => $email,
                  "password" => $password,
              ];

              if($this->userModel->checkExist("idcard",$cmnd)){
                 $this->index("CMND đã tồn tại");
              }
              else if($this->userModel->checkExist("tel",$phone)){
                $this->index("Số điện thoại đã tồn tại");
              }
              else{
                  $this->userModel->store($data);
                  $this->index("","Đăng ký thành công");
              }
            
           }
        }
        // thông tin người đăng nhập
        public function userInfo(){
            if(isset($_POST["phone"])){
                 $phone = $_POST["phone"];
                 $userInfo = $this->userModel->findByCondition("tel",$phone);
                 echo $userInfo["fullname"];
            }
         }
        // Đăng nhập
        public function login(){            
            if(isset($_POST)){
                $phone = $_POST["phone"];
                $password = $_POST["password"];

                if(!$this->userModel->checkExist("tel",$phone)){
                    $this->index('Số điện thoại chưa đăng ký');
                    
                }
                else if(!$this->userModel->checkExist("password",$password)){
                    $this->index('Mật khẩu không chính xác');
                }
                else{
                    session_start();
                    $_SESSION["phone"] = $phone;
                    header("Location: ./index.php?controller=home");
                }

            }
        }
        // Đăng xuất
        public function logout(){
            session_start();
            unset($_SESSION["phone"]);
            // Chuyển đến trang chưa đăng nhập
            header("Location: ./index.php?controller=home");
        }
        
        
    }
?>