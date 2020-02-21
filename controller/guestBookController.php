<?php
declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);


class guestBookController {
    public function render(array $GET, array $POST) {
        // If a session isn't set yet, convert the json data into objects and display them.
        if (empty($_SESSION)) {
            $this->init();
        }
        // If the user hits that submit button, put whatever they entered into the json.
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->insert();
        }
        require 'view/homepage.php';
    }

    public function init() {

    }
    public function insert() {
        $aPost = [];
        $inputTitle = $_POST['inputTitle'];
        $inputDate = date('l jS \of F Y');
        $inputContent = $_POST['inputContent'];
        $inputName = $_POST['inputName'];

        array_push($aPost, new post($inputTitle, $inputDate, $inputContent, $inputName));
        var_dump($aPost);
    }

}