<?php

class Author{
    //properties
    private $id;
    private $authorName;

    //Methods
    public function __construct($id, $authorName){
        $this->id = $id;
        $this->authorName = $authorName;
    }

    //Getters/Setters
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getAuthorName(){
        return $this->authorName;
    }
    public function setAuthorName($authorName){
        $this->authorName = $authorName;
    }

}
?>