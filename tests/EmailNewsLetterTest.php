<?php

use Acme\EmailNewsLetter;
use PHPUnit\Framework\TestCase;

/**
 * 
 *
 */
class EmailNewsLetterTest extends TestCase
{
	protected $mailer;

	protected function setUp(){
		$this->mailer = new EmailNewsLetter;
	}

    protected function tearDown(){}

    /** @test  */
    public function email_with_smartmailer_client(){

    	$this->mailer->setMailClient( new Acme\interfaces\smartmailer );

    	$this->assertTrue( $this->mailer->__get('mailClientName') == 'smartmailer');
    }

    /** @test  */
    public function email_with_mailchimp_client(){

    	$this->mailer->setMailClient( new Acme\interfaces\mailchimp );

    	$this->assertTrue( $this->mailer->__get('mailClientName') == 'mailchimp');
    }

    

}
