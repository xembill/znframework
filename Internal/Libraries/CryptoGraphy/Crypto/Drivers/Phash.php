<?php namespace ZN\CryptoGraphy\Drivers;

use ZN\CryptoGraphy\CryptoMapping;

class PhashDriver extends CryptoMapping
{
	//--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Telif Hakkı: Copyright (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

	//--------------------------------------------------------------------------------------------------------
	// Construct
	//--------------------------------------------------------------------------------------------------------
	//
	// @param void
	//
	//--------------------------------------------------------------------------------------------------------
	public function __construct()
	{
		if( ! isPhpVersion('5.5.0') )
		{
			die(getErrorMessage('Error', 'invalidVersion', ['%' => 'password_', '#' => '5.5.0']));
		}

        parent::__construct();
	}

	//--------------------------------------------------------------------------------------------------------
	// Keygen
	//--------------------------------------------------------------------------------------------------------
	//
	// @param numeric $length
	//
	//--------------------------------------------------------------------------------------------------------
	public function keygen($length)
	{
		return mb_substr(password_hash(PROJECT_CONFIG['key'], PASSWORD_BCRYPT), -$length);
	}
}