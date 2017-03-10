<?php

use Acme\PrimeFactors;
use PHPUnit\Framework\TestCase;

/**
 * Double check with http://www.mathsisfun.com/numbers/prime-factorization-tool.html
 *
 */
class PrimeFactorsTest extends TestCase
{

	protected function setUp(){}

    protected function tearDown(){}

    /** @test */
    public function primes_of_zero(){
    	$this->assertTrue( (new PrimeFactors)->generate(0) == [] );
    }

    /** 
     * @test
     * @expectedException InvalidArgumentException
     */
    public function strings_dont_have_primes(){
    	(new PrimeFactors)->generate('hello world');
    }

    /**
     * @test
     * A prime Factor is a whole number greater than 1
     */
    public function one_does_not_have_any_primes(){
    	$this->assertTrue( (new PrimeFactors)->generate(1) == [] );
    }

    /** @test */
    public function primes_of_2(){
    	$this->assertTrue( (new PrimeFactors)->generate(2) == [2] );
    }

    /** @test */
    public function primes_of_3(){
    	$this->assertTrue( (new PrimeFactors)->generate(3) == [3] );
    }

    /** @test */
    public function primes_of_4(){
    	$this->assertTrue( (new PrimeFactors)->generate(4) == [2,2] );
    }

    /** @test */
    public function primes_of_5(){
    	$this->assertTrue( (new PrimeFactors)->generate(5) == [5] );
    }

    /** @test */
    public function primes_of_10(){
    	$this->assertTrue( (new PrimeFactors)->generate(10) == [2,5] );
    }

    /** @test */
    public function primes_of_20(){
    	$this->assertTrue( (new PrimeFactors)->generate(20) == [2,2,5] );
    }

    /** @test */
    public function primes_of_100(){
    	$this->assertTrue( (new PrimeFactors)->generate(100) == [2,2,5,5] );
    }

    /** @test */
    public function primes_of_1000(){
    	$this->assertTrue( (new PrimeFactors)->generate(1000) == [2,2,2,5,5,5] );
    }


}