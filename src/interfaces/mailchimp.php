<?php
namespace Acme\interfaces;


class mailchimp implements EmailClientsInterface{

	public function clientName(){
		
		return 'mailchimp';
	}

	public function send(){ }

	public function body(){ }

	public function mailTo(){ }

	public function mailCC(){ }
	
	public function mailBC(){ }
	
}