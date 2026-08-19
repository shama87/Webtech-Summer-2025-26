<?php
class FoodModel {
    private $cookieName = "favorite_food";
 
    public function saveFoodCookie($food) {
        setcookie($this->cookieName, $food, time() + (30 * 24 * 60 * 60), "/");
        $_COOKIE[$this->cookieName] = $food;
    }
 
    public function getFoodCookie() {
        if (isset($_COOKIE[$this->cookieName])) {
            return $_COOKIE[$this->cookieName];
        }
        return null;
    }
}