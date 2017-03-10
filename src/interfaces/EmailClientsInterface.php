<?php
namespace Acme\interfaces;

interface EmailClientsInterface {

	public function clientName();

	public function send();

	public function body();

	public function mailTo();

	public function mailCC();
	
	public function mailBC();
}