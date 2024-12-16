<?php

namespace App\Service;

use Illuminate\Support\Facades\Facade;

class MessageFacade extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'learn';
	}
}
