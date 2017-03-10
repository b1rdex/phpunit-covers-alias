<?php
namespace Acme;

/*
* Prime Factors are prime numbers when multiply together to make the original number.
* The primes for 10 are 2,5 = 2*5
* 
* 30 = 30/2 = 15/3 = 5 Primes are 2,6,5
* 33 = 33/3 = 11 Primes are 3,11
* 146 = 146\2 = 73 (73 is a prime number) Primes are 2,73
* 1876 = 1876\2 = 938\2 = 469\7 = 67 (67 is a prime number) Primes are 2,2,7,67
*  
*/

class PrimeFactors {

	protected function is_a_valid_number($number){

		if( !is_numeric($number) || $number < 0 ){
			throw new \InvalidArgumentException;
		}
	}

	/**
	 * @param $number
	 * @return array
	 */
	public function generate($number)
	{
		$this->is_a_valid_number($number);

		$primes = [];

		for ( $candidate = 2; $number > 1; $candidate++ ){

			for ( ; $number % $candidate == 0; $number /= $candidate ){

				$primes[] = $candidate;

			}

		}

		return $primes;

	}
}