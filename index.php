<?php
declare(strict_types=1);

// Requires

// Controllers
require 'controller/guestBookController.php';

$controller = new guestBookController();
$controller->render($_GET, $_POST);
