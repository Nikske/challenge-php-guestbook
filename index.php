<?php
declare(strict_types=1);

// Requires
require 'model/guestBook.php';
require 'model/post.php';
// Controllers
require 'controller/guestBookController.php';

$controller = new guestBookController();
$controller->render($_GET, $_POST);
