<?php

namespace App\Service;



class Message
{
	public $message = [];

	public function addMessage($message)
	{
		array_push($this->message, $message);
	}

	public function printMessage()
	{
		return join('</br>', $this->message);
	}
}
