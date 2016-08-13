<?php namespace ZN\DataTypes;

interface FunctionsInterface
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
	// Call Array                                                                   
	//----------------------------------------------------------------------------------------------------
	//
	// @param callable $callback
	// @param array    $params
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function callArray($callback, Array $params = []);
	
	//----------------------------------------------------------------------------------------------------
	// Call                                                                 
	//----------------------------------------------------------------------------------------------------
	//
	// @param variadic $args
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function call(...$args);
	
	//----------------------------------------------------------------------------------------------------
	// Static Call Array                                                                   
	//----------------------------------------------------------------------------------------------------
	//
	// @param callable $callback
	// @param array    $params
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function staticCallArray($callback, Array $params = []);
	
	//----------------------------------------------------------------------------------------------------
	// Static Call                                                                 
	//----------------------------------------------------------------------------------------------------
	//
	// @param variadic $args
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function staticCall(...$args);
	
	//----------------------------------------------------------------------------------------------------
	// Shutdown                                                                 
	//----------------------------------------------------------------------------------------------------
	//
	// @param variadic $args
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function shutdown();
	
	//----------------------------------------------------------------------------------------------------
	// Tick                                                                 
	//----------------------------------------------------------------------------------------------------
	//
	// @param variadic $args
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function tick();
	
	//----------------------------------------------------------------------------------------------------
	// Untick                                                                 
	//----------------------------------------------------------------------------------------------------
	//
	// @param variadic $args
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function untick();

	//----------------------------------------------------------------------------------------------------
	// Defined                                                                 
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function defined() : Array;
}