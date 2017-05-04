<?php

require(ROOT . "model/AuthorModel.php");

function index()
{
	render("author/index", array(
		'authors' => getAllAuthors()
	));
}