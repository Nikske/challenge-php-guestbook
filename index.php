<?php
declare(strict_types=1);

// Requires
require 'model/guestBook.php';
require 'model/post.php';
// Controllers
require 'controller/guestBookController.php';

session_start();

$controller = new guestBookController();
$controller->render($_GET, $_POST);
