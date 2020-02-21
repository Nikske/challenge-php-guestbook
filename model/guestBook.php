<?php


class guestBook {

    private $allPosts = [];

    public function getAllPosts() {
        return $this->allPosts;
    }

    public function pushPost($obj) {
        array_push($this->allPosts, $obj);
        file_put_contents('data/posts.json', json_encode($this->allPosts, JSON_PRETTY_PRINT));
    }
    public function loadPosts() {
        $postGet = file_get_contents('data/posts.json');
        $this->allPosts = json_decode($postGet);
        return $this->allPosts;
    }
}