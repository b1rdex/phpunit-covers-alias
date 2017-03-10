<?php
namespace Acme;

class EmailNewsLetter {

	protected $mailClient;
	protected $mailClientName;

	public function setMailClient(interfaces\EmailClientsInterface $client){
		
		$this->mailClient = $client;

		$this->mailClientName = $this->mailClient->clientName('smartmailer');

	}

	public function __get($name){

		return $this->{$name};

	}

}