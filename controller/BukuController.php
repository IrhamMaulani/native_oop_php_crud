<?php
require_once('../DbConfig.php');
require_once('../model/Buku.php');


class BukuController
{
    public function index()
    {
        $db = new DbConfig();

        $book = new Buku($db->getConnection());
 
        $books = $book->selectAll();

        return $books;
    }
}
