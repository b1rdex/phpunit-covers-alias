<?php
namespace Acme;

class BookCollection {

	public $title;
	public $author;
	public $published;

	public function __construct($title, $author, $published){
		
		$this->title = $title;
		$this->author = $author;
		$this->published = $published;

	}

	public function __get($name){

		if(!empty($this->$name)){
			return $this->$name;
		}

	}

	public function __isset($name){
		isset($this->$name);
	}
}