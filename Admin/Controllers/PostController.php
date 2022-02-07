<?php 
    class PostController extends BaseController{
        private $postModel;
        private $userModel;
        public function __construct()
        {
            $this->loadModel("PostModel");
            $this->loadModel("UserModel");
            $this->postModel = new PostModel();
            $this->userModel = new UserModel();
        }
        
        public function index(){
            // Phân trang
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $postOnePage = 6; // Số bài viết hiển thị trong 1 trang.
            // Khi đã có tổng số bài viết và số bài viết trong một trang ta có thể tính ra được tổng số trang
            $startRecord = ($current_page - 1) * $postOnePage;
            $post = $this->postModel->getAllLimit($startRecord, $postOnePage);
            $toltalPage = ceil(count($this->postModel->getAll())/$postOnePage);
            $user = [];
            foreach ($post as $item) {
                array_push($user, $this->userModel->getInfoUser('id', $item['user']));
            }

            return $this->view('frontend.post.index',[
                "post" => $post,
                "user" =>$user,
                "toltalPage" => $toltalPage,

            ]);
            
        }
        public function addpost($alert=''){
            $user = $this-> userModel-> getAll();
            return $this->view('frontend.post.add',[
                'alert' => $alert,
                "user" => $user,
            ]);
        }

        public function store(){
            if(!empty($_POST)){
                $description = $_POST["description"];
                $name = $_POST["name"];
                $datepost = $_POST["datepost"];
                $user = $_POST["user"];
                $id_user = $this->userModel->getInfoUser('fullname', $user)['id'];
                
                // Ảnh 
                $thumbnail = $this->moveFile("avatar");
                $gallery = $this->moveMutilFile("details");

                $data = [
                            'description'=> $description,
                            'name' => $name,
                            'datepost'=> $datepost,
                            'user'=>$id_user,
                            'thumbnail'=>$thumbnail,
                            'gallery'=>$gallery,
                        ];

                if($this->postModel->checkExist("name",$name)){
                    $alert = "Tên post đã được đăng ký";
                    $this->addpost($alert);
                }
                else{
                    $this->postModel->store($data);
                        header("Location: ./index.php?controller=post");
                    }                
             }
        }
        public function editpost($alert=''){
            $id = $_GET['id'];
            $post = $this->postModel->findById($id);
            $user = $this-> userModel-> getAll();
            return $this->view('frontend.post.edit',
            [
                'id' => $id,
                'alert' => $alert,
                "post" => $post,
                "user" =>$user,
            ]);
        }
        public function update(){
            if(isset($_POST) && isset($_GET)){
                $id = $_GET["id"];
                $name = $_POST["name"];
                $datepost = $_POST["datepost"];
                $description = $_POST["description"];
                $user = $_POST["user"];
                $id_user = $this->userModel->getInfoUser('fullname', $user)['id'];

                $thumbnail = $this->moveFile("thumbnail");
                $galleries = $this->moveMutilFile("galleries");

                $data = [
                            'description'=> $description,
                            'name' => $name,
                            'datepost'=> $datepost,
                            'user'=>$id_user,
                            'thumbnail'=>$thumbnail,
                            'gallery'=>$galleries,

                        ];
                if($thumbnail != ''){
                    $data["thumbnail"] = $thumbnail;
                }
                if($galleries != ''){
                    $data["gallery"] = $galleries;
                }

                if($this->postModel->checkExitsUpdate("name",$name,$id)){
                    $alert = "Tên post đã tồn tại";
                    $this->editpost($alert);
                }
                else{
                    $this->postModel->updateData($id,$data);
                    header("Location: ./index.php?controller=post");
                }
                
            }

        }
        public function detail(){
            $id = $_GET["id"];
            $post = $this->postModel->findById($id);
            $userName = $this->userModel->findById($post["user"])["fullname"];

            if($post["gallery"] != null){
                $galleries = explode(",",$post["gallery"]);
            }
            else{
                $galleries = explode(",",$post["thumbnail"]);
            }
            $details = [];
            foreach($galleries as $item){
                array_push($details,$this->fixUrl($item));
            }
            $thumbnail = $this->fixUrl($post["thumbnail"]);
            return $this->view('frontend.post.detail',
            [
                'post' => $post,
                'details' => $details,
                'thumbnail' => $thumbnail,
                'userName' => $userName,

            ]);


        }
        public function delete(){
            $id = $_GET['id'];
            $this->postModel->deleteData($id);
            header("Location: ./index.php?controller=post");

        }
    } 
?>