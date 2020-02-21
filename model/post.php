<?php
declare(strict_types=1);

class post {

    // Properties
    private $title;
    private $date;
    private $content;
    private $authorName;
    private $test;

    // Methods
    public function __construct(string $title, $date, string $content, string $authorName){
        $this->title = $title;
        $this->date = $date;
        $this->content = $content;
        $this->authorName = $authorName;
    }

    public function getTitle(): string {
        return $this->title;
    }
    public function getDate() {
        return $this->date;
    }
    public function getContent(): string {
        return $this->content;
    }
    public function getAuthorName(): string {
        return $this->authorName;
    }


    public function getInfo() {
        $allInfo = ['Title' => $this->getTitle(), 'Date' => $this->getDate(), 'Content' => $this->getContent(), 'Author name' => $this->getAuthorName()];
        return $allInfo;
    }
}