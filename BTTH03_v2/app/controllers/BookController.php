<?php

require_once APP_ROOT.'/app/services/BookService.php';

class BookController{
    public function index(){
        //Goi du lieu tu BookService
        $bookService = new BookService();
        $books = $bookService->getAllBooks();
        //tạo đối tượng SongService và gọi phương thức getAllBooks, kq gán vào biến books

        //render du lieu lay duoc ra HomePage
        include APP_ROOT.'/app/views/home/index.php';
    }
}
?>
