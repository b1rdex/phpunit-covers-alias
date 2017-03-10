<?php
namespace Acme;

class Filtering{

	public function get_unpublished($books){

		$unpublished = array_filter($books, function($book){
			return ! $book->published;
		});

		return $unpublished;
	}

	public function get_published($books){

		$published = array_filter($books, function($book){
			return$book->published;
		});

		return $published;
	}

	/**
	 * This returns an array of authors
	 * @param  array or objects $books 
	 * @return array 
	 */
	public function get_authors_as_array($books){
		
		$authors = array_map(function($book){
			return $book->author;
		}, $books);

		return $authors;
	}

	public function get_authors($books){

		$authors = [];
		
		if (version_compare(phpversion(), '7.0', '>=')) {
			$authors = array_column($books, 'author'); // array_column Does not reliably work with an array of objects in versions
			return $authors;
		}
		
		// PHP less than 7.0
		foreach($books as $book){
			array_push($authors, $book->author);
		}

		return $authors;

	}


}