<?php namespace KingsVilleApp\Repositories\Eloquent;
use KingsVilleApp\Repositories\Contracts\MailContract;
use KingsVilleApp\User;
use Mail;
class EloquentMailRepository implements MailContract{
	public function sendmail($user, $subject, $view , $param){
 		Mail::send($view, ['user' => $user , 'param' => $param] , function ($message) use ($user , $subject) {
             $message->to($user->email, $user->firstname)->subject($subject);
        });
	}
}