<?php 
    class TourguiderController extends BaseController{
        private $tourguiderModel;
        public function __construct()
        {
            $this->loadModel("TourguiderModel");
            $this->tourguiderModel = new TourguiderModel();
        }
        
        public function index(){
                        // Phân trang
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $postOnePage = 6; // Số bài viết hiển thị trong 1 trang.
                        // Khi đã có tổng số bài viết và số bài viết trong một trang ta có thể tính ra được tổng số trang
            $startRecord = ($current_page - 1) * $postOnePage;
            $tourguider = $this->tourguiderModel->getAllLimit($startRecord, $postOnePage);
            $toltalPage = ceil(count($this->tourguiderModel->getAll())/$postOnePage);
            // $tourguider = $this->tourguiderModel->getAll();
            return $this->view('frontend.tourguider.index',[
                "tourguider" => $tourguider,
                "toltalPage" => $toltalPage,
            ]);
            
        }
        public function addtourguider($alert=''){
            return $this->view('frontend.tourguider.add',[
                'alert' => $alert,
            ]);
        }

        public function store(){
            if(!empty($_POST)){
                $name = $_POST["name"];
                $dob = $_POST["dob"];
                $tell = $_POST["tell"];
                $data = [
                            'name' => $name,
                            'dob' => $dob,
                            'tell' => $tell,

                        ];

                if($this->tourguiderModel->checkExist("tell",$tell)){
                    $alert = "Số điện thoại đã được đăng ký";
                    $this->addtourguider($alert);
                }
                else{
                    $this->tourguiderModel->store($data);
                        header("Location: ./index.php?controller=tourguider");
                    }
                
            }
        }
        public function editTourguider($alert=''){
            $id = $_GET['id'];
            $tourguider = $this->tourguiderModel->findById($id);
            return $this->view('frontend.tourguider.edit',
            [
                'tourguider' => $tourguider,
                'id' => $id,
                'alert' => $alert,
            ]);
        }
        public function update(){
            if(isset($_POST) && isset($_GET)){
                $id = $_GET["id"];
                $name = $_POST["name"];
                $dob = $_POST["dob"];
                $tell = $_POST["tell"];
                $data = [
                    'name' => $name,
                    'dob' => $dob,
                    'tell' => $tell,
                        ];
                if($this->tourguiderModel->checkExitsUpdate("tell",$tell,$id)){
                    $alert = "Số điện thoại đã được đăng ký";
                    $this->edittourguider($alert);
                }
                else{
                    $this->tourguiderModel->updateData($id,$data);
                    header("Location: ./index.php?controller=tourguider");
                }
                
            }

        }
        public function delete(){
            $id = $_GET['id'];
            $this->tourguiderModel->deleteData($id);
            header("Location: ./index.php?controller=tourguider");

        }
    } 
?>