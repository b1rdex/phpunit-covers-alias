<?php

use Acme\RomanNumeralsConverter;

use PHPUnit\Framework\TestCase;

/**
 *
 */
class RomanNumeralsConverterTest extends TestCase
{
	public $converter;

	/** 
	 * @test
	 * @expectedException InvalidArgumentException
	 */
	public function exception_with_zero()
	{
		$this->converter->convert(0);
	}

	/** 
	 * @test
	 * @expectedException InvalidArgumentException
	 */
	public function exception_with_non_numeric_value()
	{
		$this->converter->convert('value');
	}

	/** @test */
	public function the_roman_numeral_for_1(){
        $this->assertEquals('I', $this->converter->convert(1));
	}

	/** @test */
	public function the_roman_numeral_for_2(){
        $this->assertEquals('II', $this->converter->convert(2));
	}

	/** @test */
	public function the_roman_numeral_for_3(){
        $this->assertEquals('III', $this->converter->convert(3));
	}

	/** @test */
	public function the_roman_numeral_for_4(){
        $this->assertEquals('IV', $this->converter->convert(4));
	}

	/** @test */
	public function the_roman_numeral_for_5(){
        $this->assertEquals('V', $this->converter->convert(5));
	}

	/** @test */
	public function the_roman_numeral_for_6(){
        $this->assertEquals('VI', $this->converter->convert(6));
	}

	/** @test */
	public function the_roman_numeral_for_9(){
        $this->assertEquals('IX', $this->converter->convert(9));
	}

	/** @test */
	public function the_roman_numeral_for_10(){
        $this->assertEquals('X', $this->converter->convert(10));
	}

	/** @test */
	public function the_roman_numeral_for_11(){
        $this->assertEquals('XI', $this->converter->convert(11));
	}

	/** @test */
	public function the_roman_numeral_for_19(){
        $this->assertEquals('XIX', $this->converter->convert(19));
	}

	/** @test */
	public function the_roman_numeral_for_20(){
        $this->assertEquals('XX', $this->converter->convert(20));
	}

	/** @test */
	public function the_roman_numeral_for_50(){
        $this->assertEquals('L', $this->converter->convert(50));
	}

	/** @test */
	public function the_roman_numeral_for_100(){
        $this->assertEquals('C', $this->converter->convert(100));
	}

	/** @test */
	public function the_roman_numeral_for_500(){
        $this->assertEquals('D', $this->converter->convert(500));
	}

	/** @test */
	public function the_roman_numeral_for_1000(){
        $this->assertEquals('M', $this->converter->convert(1000));
	}

	/** @test */
	public function the_roman_numeral_for_1999(){
        $this->assertEquals('MCMXCIX', $this->converter->convert(1999));
	}

	/** @test */
	public function the_roman_numeral_for_4990(){
        $this->assertEquals('MMMMCMXC', $this->converter->convert(4990));
	}

	protected function setUp()
    {
        $this->converter = new RomanNumeralsConverter();
    }

    protected function tearDown(){}
}
