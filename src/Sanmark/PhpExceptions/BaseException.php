<?php

namespace Sanmark\PhpExceptions;

class BaseException extends \Exception
{
	protected $messages;

	public function __construct($message = NULL , $messages = NULL , $code = NULL , $previous = NULL)
	{
		$this -> messages = $messages;
		parent::__construct($message = NULL , $code = NULL , $previous = NULL);
	}

	public function getMessages()
	{
		return $this -> messages;
	}
}