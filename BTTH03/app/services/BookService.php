<?php

require_once APP_ROOT.'/app/models/Book.php';

class BookService{
    public function getAllBooks(){
        //Step 1: connect database
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        
        if($conn != null){
            //step2: truy van
            $sql = "SELECT * FROM book";
            $stmt = $conn->query($sql);

        //step3: xu ly kq tra ve
            $books = [];

            while($row = $stmt->fetch()){
                $book = new Book($row['id'], $row['bookName'],$row['date'] ,$row['idAuthor']);
                //goi ra ham tao trong Book.php
                $books[] = $book;
                // them 1 phan tu moi vao mang trong php
            }
            return $books;
        }
    }

}

?>