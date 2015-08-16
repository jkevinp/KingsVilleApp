<?php namespace KingsVilleApp\Events;

use KingsVilleApp\Events\Event;

use Illuminate\Queue\SerializesModels;
use KingsVilleApp\User;

class AccountEvents extends Event {

	use SerializesModels;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public $user;
	public $subject;
	public $view;
	public function __construct(User $user ,$subject, $view)
	{
		$this->user = $user;
		$this->view = $view;
		$this->subject= $subject;
	}

}
