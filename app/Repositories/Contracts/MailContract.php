<?php namespace KingsVilleApp\Repositories\Contracts;

interface MailContract{
		public function sendmail($user, $subject, $view , $param);
}