<?php namespace Larabook\Listeners;

use Larabook\Registration\Events\UserRegistered;
use Laracasts\Commander\Events\EventListener;
use Log;

class EmailListener extends EventListener {

	public function whenUserRegistered(UserRegistered $event)
	{
		Log::info('This is totally an email being sent', array('event' => $event));
	}

}