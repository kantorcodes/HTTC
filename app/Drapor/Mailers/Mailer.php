<?php namespace App\Drapor\Mailers;

use \Mail;
use Platform\Users\Models\User;

abstract class Mailer
{
    protected $mail;

    public function __construct(Mail $mail)
    {
        $this->mail = $mail;
    }

    /**
     * @param User $user
     * @param $subject
     * @param $view
     * @param array $data
     */
    public function sendTo(User $user, $subject, $view, $data = array())
    {
        $user         = $user->toArray();
        $data['user'] = $user;
        Mail::queue($view, $data, function ($message) use ($user, $subject) {
            $message->to($user['email'], $user['profile']['first_name'] . ' ' .$user['profile']['last_name'])
                ->subject($subject);
        });
    }
}
