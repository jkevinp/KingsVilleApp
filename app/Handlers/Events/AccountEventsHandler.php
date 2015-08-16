<?php namespace KingsVilleApp\Handlers\Events;

use KingsVilleApp\Events;
use KingsVilleApp\Events\AccountEvents;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

use KingsVilleApp\Repositories\Contracts\MailContract;

class AccountEventsHandler {

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */

	protected $mailer;
	
	public function __construct(MailContract $mc)
	{
		$this->mailer = $mc;
	}

	/**
	 * Handle the event.
	 *
	 * @param  Events  $event
	 * @return void
	 */
	public function handle(AccountEvents $event)
	{
		$param['linktoken'] = $event->user->linktoken;
		$param['email'] = $event->user->email;
		$this->mailer->sendmail($event->user, $event->subject, $event->view , $param);
		//$ curl -X POST http://textbelt.com/text \ -d number=5551234567 \ -d "message=I sent this message for free with textbelt.com" - See more at: http://textbelt.com/#sthash.TwEqWeQD.dpuf
	
	}
}
