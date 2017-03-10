<?php
namespace Acme;

use Acme\interfaces\EmailClientsInterface;

/**
 * This class is an example of Coding to an Interface and Dependancy Injection 
 */

class EmailNewsLetter {

	protected $mailClient;
	protected $mailClientName;

	public function setMailClient(EmailClientsInterface $client){
		
		$this->mailClient = $client;

		$this->mailClientName = $this->mailClient->clientName();

	}

	public function __get($name){

		return $this->{$name};

	}

}