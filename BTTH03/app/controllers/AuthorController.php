<?php

require_once APP_ROOT.'/app/services/AuthorService.php';

class AuthorController{
    public function index(){
        $authorService = new AuthorService();
        $authors = $authorService->getAllAuthors();

        //render du lieu 
        include APP_ROOT.'/app/views/home/author.php';
    }
}
?>
