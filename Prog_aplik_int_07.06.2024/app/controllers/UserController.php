<?php
    require_once BASE_PATH . '/app/models/User.php';
    require_once BASE_PATH . '/app/models/City.php';

    class UserController {
        private $userModel;

        public function __construct() {
            $this->userModel = new User(require_once BASE_PATH .
            '/app/config/database.php');
        }

        public function register() {
            $errors = [];
            $data = [];

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                //echo 'pobranie danych z formularza';
            }

            require_one BASE_PATH . '/app/views/register.php';
        }

        public function getCities() {
            $cityModel = new City(require BASE_PAH . '/app/config/database.php');
            $cities = [];
            $result = $cityModel->getCities();
            if ($result) {
                while ($row = $result->fetch_assoc()){
                    $cities[ = $row;]
                }
            }
            return $vities;
        }
    }