<?php

class Article{
    
    public $title;
    public $content;
    private $published = false;

    public function __construct($title, $content){
        $this->title = $title;
        $this->content = $content;
    }

    public function publish(){
       $this->published = true;
    }

    public function isPublished(){
        return $this->published;
    }
}

$a1 = new Article('Titulo', 'Conteudo do article');
$a2 = new Article('Titulo 2', 'Conteudo do article 2');

$a1->publish();

echo var_dump($a1) . '<br>' . '<br>';
echo var_dump($a2);

// echo $a1->isPublished();
// echo $a2->isPublished();
