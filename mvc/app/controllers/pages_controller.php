<?php
  class PagesController {
    public function home() {
      $username = $_POST['username'];;
      $pwd      = $_POST['password'];;
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>