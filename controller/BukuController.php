<?php
require_once('../model/Buku.php');


class BukuController
{
    public function index()
    {
        $book = new Buku();
 
        $books = $book->selectAll();

        return $books;
    }
}