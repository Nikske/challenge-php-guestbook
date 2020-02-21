<?php
declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);


class guestBookController {
    public function render(array $GET, array $POST) {
        // If the user hits that submit button, put whatever they entered into the json.
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->insert();
        }
        require 'view/homepage.php';
    }

    private function insert() {
        $inputTitle = htmlspecialchars($_POST['inputTitle']);
        $inputDate = date('l jS \of F Y');
        $inputContent = htmlspecialchars($_POST['inputContent']);
        $inputName = htmlspecialchars($_POST['inputName']);

        $aPost = new post($inputTitle, $inputDate, $inputContent, $inputName);
        //var_dump($aPost);

        $guestBook = new guestBook();
        $guestBook->pushPost($aPost->getInfo());

    }

}