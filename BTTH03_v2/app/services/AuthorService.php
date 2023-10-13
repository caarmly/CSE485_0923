<?php

require_once APP_ROOT.'/app/models/Author.php';

class AuthorService{
    public function getAllAuthors(){
        //Step 1: connect database
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        
        if($conn != null){
            //step2: truy van
            $sql = "SELECT * FROM author";
            $stmt = $conn->query($sql);

        //step3: xu ly kq tra ve
            $authors = [];

            while($row = $stmt->fetch()){
                $author = new Author($row['id'], $row['authorName']);
                //goi ra ham tao trong Author.php
                $authors[] = $author;
                // them 1 phan tu moi vao mang trong php
            }
            return $authors;
        }
    }
}

?>