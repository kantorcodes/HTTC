<?php namespace App\Drapor\Mailers;
use Carbon\Carbon;
use Mail;
class ContactMailer{

	public function send($name,$subject,$body,$userEmail,$ip)
	{
		$email = env('USER_EMAIL');

		$data['body'] = $body;
		$data['name'] = $name;
		$data['from'] = $userEmail;
		$data['subject'] = $subject;
		$data['time'] = Carbon::now();
		$data['ip']   = $ip;

		 Mail::queue('partials.contact', $data, function ($message) use ($email,$name,$subject) {
            $message->to($email, $name)
                ->subject($subject);
        });
	}
}