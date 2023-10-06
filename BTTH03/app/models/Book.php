<?php

class Book{
    //properties
    private $id;
    private $bookName;
    private $date;
    private $idAuthor;

    //Methods
    public function __construct($id, $bookName, $date, $idAuthor){
        $this->id = $id;
        $this->bookName = $bookName;
        $this->date = $date;
        $this->idAuthor = $idAuthor;
    }

    //Getters/Setters
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getBookName(){
        return $this->bookName;
    }
    public function setBookName($bookName){
        $this->bookName = $bookName;
    }

    public function getDate(){
        return $this->date;
    }
    public function setDate($date){
        $this->date = $date;
    }

    public function getIdAuthor(){
        return $this->idAuthor;
    }
    public function setIdAuthor($idAuthor){
        $this->idAuthor = $idAuthor;
    }
}
?>