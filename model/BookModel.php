<?php

function getBooks($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM books WHERE author_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetchAll();
}

function getAllBooks()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM books";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}
