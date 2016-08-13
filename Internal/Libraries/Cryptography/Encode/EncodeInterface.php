<?php namespace ZN\Cryptography;

interface EncodeInterface
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
	// Create
	//----------------------------------------------------------------------------------------------------
	// 
	// @param int    $count
	// @param string $chars
	//
	//----------------------------------------------------------------------------------------------------
	public function create(Int $count = 6, String $chars = 'all') : String;
	
	//----------------------------------------------------------------------------------------------------
	// Golden
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $data
	// @param string $additional
	//
	//----------------------------------------------------------------------------------------------------
	public function golden(String $data, String $additional = 'default') : String;	
	
	//----------------------------------------------------------------------------------------------------
	// Super
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $data
	//
	//----------------------------------------------------------------------------------------------------
	public function super(String $data) : String;
	
	//----------------------------------------------------------------------------------------------------
	// Data
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $data
	// @param string $type
	//
	//----------------------------------------------------------------------------------------------------
	public function data(String $data, String $type = 'md5') : String;
	
	//----------------------------------------------------------------------------------------------------
	// Type
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $data
	// @param string $type
	//
	//----------------------------------------------------------------------------------------------------
	public function type(String $data, String $type = 'md5') : String;
}