<?php namespace ZN\ErrorHandling;

class InternalErrors implements ErrorsInterface
{
	//----------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Telif Hakkı: Copyright (c) 2012-2016, znframework.com
    //
    //----------------------------------------------------------------------------------------------------
	
	//----------------------------------------------------------------------------------------------------
	// Errors
	//----------------------------------------------------------------------------------------------------
	//
	// @param array
	//
	//----------------------------------------------------------------------------------------------------
	protected $errors;

	//----------------------------------------------------------------------------------------------------
	// Message
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $langFile
	// @param string $errorMsg
	// @param mixed  $ex
	//
	//----------------------------------------------------------------------------------------------------
	public function message(String $langFile, String $errorMsg, $ex = NULL) : String
	{
		return getErrorMessage($langFile, $errorMsg, $ex);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Last
	//----------------------------------------------------------------------------------------------------
	//
	// @param  string $type
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public function last(String $type = NULL)
	{
		return errorReport($type);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Log
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $message
	// @param int    $type
	// @param string $destination
	// @param string $header
	//
	//----------------------------------------------------------------------------------------------------
	public function log(String $message, Int $type = 0, String $destination = NULL, String $header = NULL) : Bool
	{
		return error_log($message, $type, $destination, $header);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Report
	//----------------------------------------------------------------------------------------------------
	//
	// @param int
	//
	//----------------------------------------------------------------------------------------------------	
	public function report(Int $level = NULL) : Int
	{
		if( ! empty($level) )
		{
			return error_reporting($level);
		}
		
		return error_reporting();
	}
	
	
	//----------------------------------------------------------------------------------------------------
	// Handler
	//----------------------------------------------------------------------------------------------------
	//
	// @param callable $handler
	// @param int      $errorTypes
	//
	//----------------------------------------------------------------------------------------------------	
	public function handler($handler, Int $errorTypes = E_ALL | E_STRICT)
	{
		if( ! is_callable($handler) )
		{
			return $this->set(lang('Error', 'callableParameter', '1.(handler)'));	
		}

		return set_error_handler($handler, $errorTypes);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Trigger
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $msg
	// @param int    $errorType
	//
	//----------------------------------------------------------------------------------------------------
	public function trigger(String $msg, Int $errorType = E_USER_NOTICE) : Bool
	{
		return trigger_error($msg, $errorType);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Restore
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function restore() : Bool
	{
		return restore_error_handler();
	}
}