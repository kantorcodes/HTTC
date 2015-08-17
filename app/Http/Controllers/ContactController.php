<?php namespace App\Http\Controllers;

use Request;
use App\Drapor\Mailers\ContactMailer;

class ContactController extends Controller{

	public function getContact()
	{

		$view['title']       = 'Contact The Author';
		$view['description'] = 'Contact Raelina Marie For Inquiries about chicken';

		return view('pages.contact.index',$view);
	}

	public function postContact()
	{
		$name    = Request::input('name');
		$email   = Request::input('email');
		$subject = Request::input('subject');
		$body    = Request::input('body');
		$ip      = Request::ip();

		$mailer  = app(ContactMailer::class);

		$mailer->send($name,$subject,$body,$email,$ip);

	}
}