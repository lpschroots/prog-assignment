<?php

require(ROOT . "model/BookModel.php");
require(ROOT . "model/AuthorModel.php");

function index()
{
	render("book/index", array(
		'books' => getAllBooks()
	));
}

function getBooksByAuthor($id)
{
	$books = getBooks($id);
	$author = getAuthor($id);
	render("book/index", array(
		"books" => $books,
		"author" => $author
		));
}

function create()
{
	render("book/create");
}

function createSave()
{
	if (!createBook()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "author/index");
}

function edit($id)
{
	render("book/edit", array(
		'book' => getBook($id)
	));
}

function editSave()
{
	if (!editBook()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "book/index");
} 