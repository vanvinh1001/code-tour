<?php 
    class BookingController extends BaseController{
        private $bookingModel;
        private $userModel;
        private $tourModel;

        public function __construct()
        {
            $this->loadModel("BookingModel");
            $this->loadModel("UserModel");
            $this->loadModel("TourModel");
            $this->loadModel("HotelModel");
            $this->bookingModel = new BookingModel();
            $this->userModel = new UserModel();
            $this->tourModel = new TourModel();
        }

        public function index(){
            session_start();
            $userphone = $_SESSION["phone"];
            $id_users = $this->userModel->getInfoUser('tel', $userphone)['id'];
                        // Phân trang
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $postOnePage = 4; // Số bài viết hiển thị trong 1 trang.
                        // Khi đã có tổng số bài viết và số bài viết trong một trang ta có thể tính ra được tổng số trang
            $startRecord = ($current_page - 1) * $postOnePage;
            $booking = $this->bookingModel->findAllByConditionLimit('id_users',$id_users,$startRecord, $postOnePage);
            $tours = $this->tourModel->getAllLimit($startRecord, $postOnePage);
            $toltalPage = ceil(count($booking)/$postOnePage);
            // $booking = $this->bookingModel->getAll();
            $users = [];
            $tours = [];
            $price=[];
            $quantity = [];
            $toltal = [];

            foreach ($booking as $item) {
                array_push($users, $this->userModel->getInfoUser('id', $item['id_users']));
                array_push($tours, $this->tourModel->getInfoTour('id_tour', $item['id_tour']));
                array_push($quantity,$item['quantity']);
            }
            foreach ($tours as $item){
                array_push($price,intval($item['price']));
            }
            for($i=0; $i < count($quantity); $i++){
                $money = $price[$i] * $quantity[$i];
                array_push($toltal,$money);
            }
                            
            return $this->view('frontend.booking.index',[
                "booking" => $booking,
                "users" => $users,
                "tours" => $tours,
                "toltalPage" => $toltalPage,
                "toltal" => $toltal,
            ]);            
        }

        public function addbooking($alert=''){
            $users = $this-> userModel-> getAll();
            $tours = $this-> tourModel-> getAll();
            return $this->view('frontend.booking.index',[
                'alert' => $alert,
                "users" => $users,
                "tours" => $tours,
            ]);
        }

        public function store(){
            if(!empty($_POST)){
                session_start();
                $userphone = $_SESSION["phone"];
                $id_users = $this->userModel->getInfoUser('tel', $userphone)['id'];
                $id_tours = $_GET["id"];
                $quantity = $_POST["quantity"];
                $data = [
                            'id_users' => $id_users,
                            'id_tour' => $id_tours,
                            'quantity' => $quantity,
                        ];
                    
                        $this->bookingModel->store($data);
                        header("Location: ./index.php?controller=booking");
                // var_dump($data);
            }
        }
        public function editbooking($alert=''){
            $id = $_GET['id'];
            $booking = $this->bookingModel->findById($id);
            $users = $this-> userModel-> getAll();
            $tours = $this-> tourModel-> getAll();
            return $this->view('frontend.booking.edit',
            [
                'booking' => $booking,
                'id' => $id,
                'alert' => $alert,
                'users' => $users,
                'tours' => $tours,
            ]);
        }
        public function update(){
            if(isset($_POST) && isset($_GET)){
                $id = $_GET["id"];
                $users = $_POST["users"];
                $id_users = $this->userModel->getInfoUser('fullname', $users)['id'];
                $tours = $_POST["tours"];
                $id_tours = $this->tourModel->getInfoTour('name', $tours)['id_tour'];
                $date = $_POST["date"];
                $data = [
                    'id_users' => $id_users,
                    'id_tours' => $id_tours,
                    'date' => $date,
                        ];

                    $this->bookingModel->updateData($id,$data);
                    header("Location: ./index.php?controller=booking");             
            }

        }
        public function delete(){
            $id = $_GET['id'];
            $this->bookingModel->deleteData($id);
            header("Location: ./index.php?controller=booking");

        }
    } 
?>