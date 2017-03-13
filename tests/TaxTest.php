<?php

use Acme\Tax;

use PHPUnit\Framework\TestCase;

/**
 * @covers Filtering
 *
 */
class TaxTest extends TestCase
{

	protected function setUp(){}

    protected function tearDown(){}

    /**
     * @test
     *      */
    public function invalid_price(){
    	$this->assertEquals( Tax::inc(0, 20), 0);
    }

    // /** @test */
    // public function get_price_inc_vat(){

    // 	$this->assertEquals(Tax::inc(100, 20, ['calculation_method' => 'lines']), 120);

    // 	$this->assertEquals(Tax::inc(120, 20.6, ['calculation_method' => 'lines']), 145);

    // }

    // /** @test */
    // public function get_price_ex_vat(){

    // 	$this->assertEquals(Tax::ex(100, 20, ['calculation_method' => 'lines']), 83);

    // }

    /** @test */
    public function convert_pounds_to_pence(){

    	// As decimal
    	$this->assertEquals((new Tax() )->convert_to_pence(100.23), 10023);

    	// As a string
    	$this->assertEquals((new Tax() )->convert_to_pence('100.23'), 10023);

    }

    /** @test */
    public function convert_rate_to_decimal(){

    	$this->assertEquals((new Tax)->generate_percent_value(40), 1.4);// 40%
    	$this->assertEquals((new Tax)->generate_percent_value(20), 1.2);// 20%

    	$this->assertEquals((new Tax)->generate_percent_value("20"), 1.2);// 20%
    	$this->assertEquals((new Tax)->generate_percent_value("20.5"), 1.205);// 20.5%
    }

    /** @test  */
    public function convert_pence_to_pounds(){

    	$pence = (new Tax(['calculation_method' => 'lines']))->convert_pence_to_pounds(8676);

    	$this->assertEquals( $pence, 87);

    	$pence = (new Tax(['calculation_method' => 'lines']))->convert_pence_to_pounds(8636);

    	$this->assertEquals( $pence, 86.5);
    }

}