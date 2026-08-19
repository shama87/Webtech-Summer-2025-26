<?php
require_once "model/FoodModel.php";
 
class FoodController {
    private $model;
 
    public function __construct() {
        $this->model = new FoodModel();
    }
 
    public function handleRequest() {
        if (isset($_POST['submit'])) {
            $foodName = trim($_POST['food_name']);
            if (!empty($foodName)) {
                $this->model->saveFoodCookie($foodName);
            }
        }
 
        $food = $this->model->getFoodCookie();
        require_once "view/food_view.php";
    }
}