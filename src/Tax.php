<?php
namespace Acme;

class Tax {

	public static function inc(	$price = 0, 
								$rate = 0, 
								$options = ['calculation_method' => 'lines']
								){

		$tax = new self($options);

		$price = $tax->convert_to_pence($price);
		$rate = $tax->generate_percent_value($rate);

		$inc_vat_price = $price * $rate;

		return $tax->convert_pence_to_pounds($inc_vat_price);

	}

	public static function ex($price = 0, $rate = 0, $options = ['calculation_method' => 'lines']){

		$tax = new self($options);
		
		$price = $tax->convert_to_pence($price);
		$rate = $tax->generate_percent_value($rate);

		$ex_vat_price = $price / $rate;
		
		return $tax->convert_pence_to_pounds($ex_vat_price);

	}

	protected $precision;

	public function __construct( $options = ['calculation_method' => 'lines'] ){

		$this->calculation_method = $options['calculation_method'];

	}

	public function generate_percent_value($rate){
		return ( $rate/100 ) + 1;
	}

	public  function convert_to_pence($pounds){

		return $pounds * 100;
	}

	public function convert_pence_to_pounds($pence){

		$pounds = round($pence / 100, 4);

		switch ($this->calculation_method) {
			case 'lines':
				$pounds = $pounds * 2;
				$pounds = round( $pounds ) / 2;
				break;
			
			default: // Units
				# code...
				break;
		}
		


		return $pounds;
	}

	public function check_price_is_valid($price){

	}
}