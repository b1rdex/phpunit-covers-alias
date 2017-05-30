<?php

use Acme\Tax;
use Acme\Tax as Alias;

use PHPUnit\Framework\TestCase;

class AliasTest extends TestCase
{
	/**
	 * @covers Acme\Tax::__construct()
	 */
	public function testByName()
	{
		$sut = new Tax();
	}

	/**
         * @covers Alias::__construct()
         */
        public function testByAlias()
        {
                $sut = new Alias();
        }
}
