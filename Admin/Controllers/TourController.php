<?php 
    class TourController extends BaseController{
        private $placeModel;
        private $hotelModel;
        private $tourModel;
        private $tourguiderModel;
        public function __construct()
        {
            $this->loadModel("PlaceModel");
            $this->loadModel("HotelModel");
            $this->loadModel("TourModel");
            $this->loadModel("TourguiderModel");
            $this->placeModel = new PlaceModel();
            $this->hotelModel = new HotelModel();
            $this->tourModel = new TourModel();
            $this->tourguiderModel = new TourguiderModel();
        }
        
        public function index(){
            // Phân trang
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            $postOnePage = 6; // Số bài viết hiển thị trong 1 trang.
            // Khi đã có tổng số bài viết và số bài viết trong một trang ta có thể tính ra được tổng số trang
            $startRecord = ($current_page - 1) * $postOnePage;
            $tours = $this->tourModel->getAllLimit($startRecord, $postOnePage);
            $toltalPage = ceil(count($this->tourModel->getAll())/$postOnePage);
            $places = [];
            $hotels = [];
            $tourguider = [];
            foreach ($tours as $item) {
                array_push($places, $this->placeModel->getInfoPlace('id_place', $item['id_place']));
            }
            foreach ($tours as $item) {
                array_push($hotels, $this->hotelModel->getInfoHotel('id_hotel', $item['id_hotel']));
            }
            foreach ($tours as $item) {
                array_push($tourguider, $this->tourguiderModel->getInfoTourguider('id_tourguider', $item['id_tourguider']));
            }

            return $this->view('frontend.tour.index',[
                "tours" => $tours,
                "places" =>$places,
                "hotels" => $hotels,
                "tourguider" => $tourguider,
                "toltalPage" => $toltalPage,

            ]);
            
        }
        public function addtour($alert=''){
            $places = $this-> placeModel-> getAll();
            $hotels = $this-> hotelModel-> getAll();
            $tourguider = $this-> tourguiderModel-> getAll();
            return $this->view('frontend.tour.add',[
                'alert' => $alert,
                "places" =>$places,
                "hotels" => $hotels,
                "tourguider" => $tourguider,
            ]);
        }

        public function store(){
            if(!empty($_POST)){
                $name = $_POST["name"];
                $datego = $_POST["datego"];
                $dateback = $_POST["dateback"];
                $seats = $_POST["seats"];
                $vehicel = $_POST["vehicel"];
                $places = $_POST["place"];
                $price =$_POST["price"];
                $id_place = $this->placeModel->getInfoPlace('name', $places)['id_place'];
                $hotels = $_POST["hotel"];
                $id_hotels = $this->hotelModel->getInfoHotel('name', $hotels)['id_hotel'];
                $tourguider = $_POST["tourguider"];
                $id_tourguider = $this->tourguiderModel->getInfoTourguider('name', $tourguider)['id_tourguider'];
                $description = $_POST["description"];
                

                // Ảnh 
                $thumbnail = $this->moveFile("avatar");
                $gallery = $this->moveMutilFile("details");

                $data = [
                            'name'=> $name,
                            'datego'=> $datego,
                            'dateback'=> $dateback,
                            'seats'=> $seats,
                            'vehicel'=> $vehicel,
                            'id_hotel'=>$id_hotels,
                            'id_place'=>$id_place,
                            'price' =>$price,
                            'id_tourguider'=>$id_tourguider,
                            'thumbnail'=>$thumbnail,
                            'gallery'=>$gallery,
                            'description' => $description,
                            
                        ];
                if($this->tourModel->checkExist("name",$name)){
                    $alert = "Tên tour đã được đăng ký";
                    $this->addtour($alert);
                }
                else{
                    $this->tourModel->store($data);
                        header("Location: ./index.php?controller=tour");
                    }
                
             }
        }
        public function edittour($alert=''){
            $id = $_GET['id'];
            $tours = $this->tourModel->findById($id);
            $places = $this-> placeModel-> getAll();
            $hotels = $this-> hotelModel-> getAll();
            $tourguider = $this-> tourguiderModel-> getAll();
            return $this->view('frontend.tour.edit',
            [
                'id' => $id,
                'alert' => $alert,
                "tours" => $tours,
                "places" =>$places,
                "hotels" => $hotels,
                "tourguider" => $tourguider,
            ]);
        }
        public function update(){
            if(isset($_POST) && isset($_GET)){
                $id = $_GET['id'];
                $name = $_POST["name"];
                $datego = $_POST["datego"];
                $dateback = $_POST["dateback"];
                $price =$_POST["price"];
                $seats = $_POST["seats"];
                $vehicel = $_POST["vehicel"];
                $places = $_POST["place"];
                $description = $_POST["description"];
                $id_place = $this->placeModel->getInfoPlace('name', $places)['id_place'];
                $hotels = $_POST["hotel"];
                $id_hotels = $this->hotelModel->getInfoHotel('name', $hotels)['id_hotel'];
                $tourguider = $_POST["tourguider"];
                $id_tourguider = $this->tourguiderModel->getInfoTourguider('name', $tourguider)['id_tourguider'];
                $description = $_POST["description"];
                

                $thumbnail = $this->moveFile("thumbnail");
                $galleries = $this->moveMutilFile("galleries");

                $data = [
                            'name' => $name,
                            'datego' => $datego,
                            'dateback' => $dateback,
                            'price' =>$price,
                            'seats' => $seats,
                            'vehicel' => $vehicel,
                            'description' => $description,
                            'id_place' =>$id_place,
                            'id_hotel' =>$id_hotels,
                            'id_tourguider' =>$id_tourguider,
                            'description' => $description,
                            

                        ];
                if($thumbnail != ''){
                    $data["thumbnail"] = $thumbnail;
                }
                if($galleries != ''){
                    $data["gallery"] = $galleries;
                }

                if($this->tourModel->checkExitsUpdate("name",$name,$id)){
                    $alert = "Tour đã tồn tại";
                    $this->editTour($alert);
                }
                else{
                    $this->tourModel->updateData($id,$data);
                    header("Location: ./index.php?controller=tour");
                }
                // echo "<pre>";
                // print_r($data);
            }

        }
        public function detail(){
            $id = $_GET["id"];
            $tour = $this->tourModel->findById($id);
            $placeName = $this->placeModel->findById($tour["id_place"])["name"];
            $hotelName = $this->hotelModel->findById($tour["id_hotel"])["name"];
            $tourguiderName = $this->tourguiderModel->findById($tour["id_tourguider"])["name"];

            if($tour["gallery"] != null){
                $galleries = explode(",",$tour["gallery"]);
            }
            else{
                $galleries = explode(",",$tour["thumbnail"]);
            }
            $details = [];
            foreach($galleries as $item){
                array_push($details,$this->fixUrl($item));
            }
            $thumbnail = $this->fixUrl($tour["thumbnail"]);
            return $this->view('frontend.tour.detail',
            [
                'tour' => $tour,
                'details' => $details,
                'thumbnail' => $thumbnail,
                'placeName' => $placeName,
                'hotelName' => $hotelName,
                'tourguiderName' => $tourguiderName,

            ]);
            // echo "<pre>";
            // echo ($tourguiderName);

        }
        public function delete(){
            $id = $_GET['id'];
            $this->tourModel->deleteData($id);
            header("Location: ./index.php?controller=tour");

        }

    } 
?>