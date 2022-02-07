<?php 
    class HotelController extends BaseController{
        private $hotelModel;
        public function __construct()
        {
            $this->loadModel("HotelModel");
            $this->hotelModel = new HotelModel();
        }
        public function index(){
                        // Phân trang
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $postOnePage = 6; // Số bài viết hiển thị trong 1 trang.
                        // Khi đã có tổng số bài viết và số bài viết trong một trang ta có thể tính ra được tổng số trang
            $startRecord = ($current_page - 1) * $postOnePage;
            $hotel = $this->hotelModel->getAllLimit($startRecord, $postOnePage);
            $toltalPage = ceil(count($this->hotelModel->getAll())/$postOnePage);
            // $hotel = $this->hotelModel->getAll();
            return $this->view('frontend.hotel.index',[
                "hotel" => $hotel,
                "toltalPage" => $toltalPage,
            ]);
            
        }
        public function addhotel($alert=''){
            return $this->view('frontend.hotel.add',[
                'alert' => $alert,
            ]);
        }

        public function store(){
            if(!empty($_POST)){
                $name = $_POST["name"];
                $address = $_POST["address"];
                $tell = $_POST["tell"];
                $data = [
                            'name' => $name,
                            'address' => $address,
                            'tell' => $tell,
                        ];

                if($this->hotelModel->checkExist("name",$name)){
                        $alert = "Tên khách sạn đã được đăng ký";
                        $this->addhotel($alert);
                    }
                else if($this->hotelModel->checkExist("tell",$tell)){
                            $alert = "Số điện thoại` đã được đăng ký";
                        $this->addhotel($alert);
                    }
                else{
                        $this->hotelModel->store($data);
                        header("Location: ./index.php?controller=hotel");
                    }
                
            }
        }
        public function edithotel($alert=''){
            $id = $_GET['id'];
            $hotel = $this->hotelModel->findById($id);
            return $this->view('frontend.hotel.edit',
            [
                'hotel' => $hotel,
                'id' => $id,
                'alert' => $alert,
            ]);
        }
        public function update(){
            if(isset($_POST) && isset($_GET)){
                $id = $_GET["id"];
                $name = $_POST["name"];
                $address = $_POST["address"];
                $tell = $_POST["tell"];
                $data = [
                    'name' => $name,
                    'address' => $address,
                    'tell' => $tell,
                        ];

                if($this->hotelModel->checkExitsUpdate("name",$name,$id)){
                    $alert = "Tên khách sạn đã được đăng ký";
                    $this->edithotel($alert);
                }
                else if($this->hotelModel->checkExitsUpdate("tell",$tell,$id)){
                    $alert = "Số điện thoại đã được đăng ký";
                    $this->edithotel($alert);
                }
                else{
                    $this->hotelModel->updateData($id,$data);
                    header("Location: ./index.php?controller=hotel");
                }                
            }

        }
        public function delete(){
            $id = $_GET['id'];
            $this->hotelModel->deleteData($id);
            header("Location: ./index.php?controller=hotel");

        }
    } 
?>