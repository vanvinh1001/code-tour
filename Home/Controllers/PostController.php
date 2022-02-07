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
            $postOnePage = 4; // Số bài viết hiển thị trong 1 trang.
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
                array_push($details,$this->fixUrl($item,'./'));
            }
            $thumbnail = $this->fixUrl($post["thumbnail"],'./');
            return $this->view('frontend.post.detail',
            [
                'post' => $post,
                'details' => $details,
                'thumbnail' => $thumbnail,
                'userName' => $userName,
            ]);


        }
    } 
?>