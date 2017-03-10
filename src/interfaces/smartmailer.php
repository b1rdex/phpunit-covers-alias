<?php
namespace Acme\interfaces;


class smartmailer implements EmailClientsInterface {
		
	public function clientName(){
		
		return 'smartmailer';

	}

	public function send(){ }

	public function body(){ }

	public function mailTo(){ }

	public function mailCC(){ }
	
	public function mailBC(){ }
}