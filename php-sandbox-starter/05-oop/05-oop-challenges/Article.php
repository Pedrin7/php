<?php

class Article{
    
    private $published = 'false';
    public $title;
    public $content;

    public function __construct($title, $content){
        $this->title = $title;
        $this->content = $content;
    }
}