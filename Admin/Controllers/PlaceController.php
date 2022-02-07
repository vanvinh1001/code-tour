<?php 
    class PlaceController extends BaseController{
        private $placeModel;
        public function __construct()
        {
            $this->loadModel("PlaceModel");
            $this->placeModel = new PlaceModel();
        }
        
        public function index(){
                    // Phân trang
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $postOnePage = 6; // Số bài viết hiển thị trong 1 trang.
                    // Khi đã có tổng số bài viết và số bài viết trong một trang ta có thể tính ra được tổng số trang
            $startRecord = ($current_page - 1) * $postOnePage;
            $places = $this->placeModel->getAllLimit($startRecord, $postOnePage);
            $toltalPage = ceil(count($this->placeModel->getAll())/$postOnePage);
            // $places = $this->placeModel->getAll();
            return $this->view('frontend.place.index',[
                "places" => $places,
                "toltalPage" => $toltalPage,
            ]);
            
        }
        public function addplace($alert=''){
            return $this->view('frontend.place.add',[
                'alert' => $alert,
            ]);
        }

        public function store(){
            if(!empty($_POST)){
                $name = $_POST["name"];
                $description = $_POST["description"];
                $data = [
                            'name' => $name,
                            'description' => $description,
                        ];

                if($this->placeModel->checkExist("name",$name)){
                    $alert = "Place đã được đăng ký";
                    $this->addplace($alert);
                }
                else{
                    $this->placeModel->store($data);
                        header("Location: ./index.php?controller=place");
                    }
                
            }
        }
        public function editplace($alert=''){
            $id = $_GET['id'];
            $places = $this->placeModel->findById($id);
            return $this->view('frontend.place.edit',
            [
                'places' => $places,
                'id' => $id,
                'alert' => $alert,
            ]);
        }
        public function update(){
            if(isset($_POST) && isset($_GET)){
                $id = $_GET["id"];
                $name = $_POST["name"];
                $description = $_POST["description"];
                $data = [
                            'name' => $name,
                            'description' => $description,
                        ];

                if($this->placeModel->checkExitsUpdate("name",$name,$id)){
                    $alert = "Place đã được đăng ký";
                    $this->editplace($alert);
                }
                else{
                    $this->placeModel->updateData($id,$data);
                    header("Location: ./index.php?controller=place");
                }
                
            }
            var_dump($_POST);

        }
        public function delete(){
            $id = $_GET['id'];
            $this->placeModel->deleteData($id);
            header("Location: ./index.php?controller=place");
        }
    } 
?>