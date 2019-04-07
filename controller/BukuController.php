<?php
require_once('../model/Buku.php');


class BukuController
{
    public function index()
    {
        $books = new Buku();
 
        $books = $books->selectAll();

        return $books;
    }

    public function show($id){
        
        $book = new Buku();

        $book = $book->getById($id);

        return $book;
    }
}