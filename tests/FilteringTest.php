<?php

use Acme\Filtering;
use Acme\BookCollection;

use PHPUnit\Framework\TestCase;

/**
 * @covers Filtering
 *
 */
class FilteringTest extends TestCase
{
	protected $filter;
	protected $collection;

	protected function setUp(){

		$this->collection = [
				new BookCollection('Old Man of the Sea', 'Ernest Hemingway', true),
				new BookCollection('Hyperion', NULL, true),
				new BookCollection('Bring on the empty elephants', 'David Niven', true),
				new BookCollection('The Fold', 'Peter Clines', false),
				new BookCollection('Farewell my lovely', 'Raymond Chandler', true),
				new BookCollection('Spanish Steps', 'Tim More', false),
				new BookCollection('Gironimo', 'Tim More', true),
		];
	}

    protected function tearDown(){}

    /** @test  */
    public function get_unpublished_books(){

    	$unpublished = (new Filtering)->get_unpublished($this->collection);

    	$this->assertEquals( 2, count($unpublished) );
    }

    /** @test  */
    public function get_published_books(){

    	$unpublished = (new Filtering)->get_published($this->collection);

    	$this->assertEquals( 5, count($unpublished) );
    }

    /** @test */
    public function get_authors(){

    	$authors = (new Filtering)->get_authors_as_array($this->collection);

    	$testValues = [
    		   "Ernest Hemingway", NULL, "David Niven", "Peter Clines", "Raymond Chandler", "Tim More", "Tim More"
    	];

    	$this->assertEquals( $testValues, $authors );
    }

    /** @test */
    public function get_authors_as_array(){

    	$authors = (new Filtering)->get_authors($this->collection);

    	$testValues = [
    		   "Ernest Hemingway", NULL, "David Niven", "Peter Clines", "Raymond Chandler", "Tim More", "Tim More"
    	];

    	$this->assertEquals( $testValues, $authors );
    }

}