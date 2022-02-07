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
            $postOnePage = 4; // Số bài viết hiển thị trong 1 trang.
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
        public function detail(){
            $id = $_GET["id"];
            $tour = $this->tourModel->findById($id);
            $placeName = $this->placeModel->findById($tour["id_place"])["name"];
            $hotelName = $this->hotelModel->findById($tour["id_hotel"])["name"];
            $tourguiderName = $this->placeModel->findById($tour["id_tourguider"])["name"];

            if($tour["gallery"] != null){
                $galleries = explode(",",$tour["gallery"]);
            }
            else{
                $galleries = explode(",",$tour["thumbnail"]);
            }
            $details = [];
            foreach($galleries as $item){
                array_push($details,$this->fixUrl($item,'./'));
            }
            $thumbnail = $this->fixUrl($tour["thumbnail"],'./');
            return $this->view('frontend.tour.detail',
            [
                'tour' => $tour,
                'details' => $details,
                'thumbnail' => $thumbnail,
                'placeName' => $placeName,
                'hotelName' => $hotelName,
                'tourguiderName' => $tourguiderName,

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
    } 
?>