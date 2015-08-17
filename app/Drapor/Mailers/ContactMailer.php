<?php namespace App\Drapor\Mailers;

class ContactMailer{

	public function send($name,$subject,$body,$userEmail,$ip)
	{
		$email = env('USER_EMAIL');

		$data['body'] = $body;
		$data['name'] = $name;
		$data['from'] = $userEmail;
		$data['time'] = Carbon\Carbon::now();
		$data['ip']   = $ip;

		 Mail::queue('partials.contact', $data, function ($message) use ($email,$name,$subject) {
            $message->to($email, $name)
                ->subject($subject);
        });
	}
}