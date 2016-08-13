<?php namespace ZN\IndividualStructures\Drivers;

use ZN\IndividualStructures\Abstracts\CacheDriverMappingAbstract;

class ApcDriver extends CacheDriverMappingAbstract
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
	// Construct
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string $driver
	// @return bool
	//
	//----------------------------------------------------------------------------------------------------
	public function __construct()
	{
		\Support::extension('apc');
	}
	
	//----------------------------------------------------------------------------------------------------
	// Select
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string $key
	// @param  mixed  $compressed
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public function select($key, $compressed = NULL)
	{
		$success = false;
		
		$data = apc_fetch($key, $success);
		
		if( $success === true )
		{
			return ( is_array($data) )
				   ? unserialize($data[0])
				   : $data;
		}
		
		return false;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Insert
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string   $key
	// @param  variable $var
	// @param  numeric  $time
	// @param  mixed    $compressed
	// @return bool
	//
	//----------------------------------------------------------------------------------------------------
	public function insert($key, $var, $time, $compressed)
	{	
		$time = (int)$time;
		
		return apc_store
		(
			$key,
			$compressed === true ? $var : [serialize($var), time(), $time],
			$time
		);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Delete
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string $key
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public function delete($key)
	{
		return apc_delete($key);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Increment
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $key
	// @param  numeric $increment
	// @return void
	//
	//----------------------------------------------------------------------------------------------------
	public function increment($key, $increment)
	{
		return apc_inc($key, $increment);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Decrement
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $key
	// @param  numeric $decrement
	// @return void
	//
	//----------------------------------------------------------------------------------------------------
	public function decrement($key, $decrement)
	{	
		return apc_dec($key, $decrement);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Clean
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  void
	// @return void
	//
	//----------------------------------------------------------------------------------------------------
	public function clean()
	{
		return apc_clear_cache('user');
	}
	
	//----------------------------------------------------------------------------------------------------
	// Info
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  mixed  $info
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public function info($type = NULL)
	{	
		return apc_cache_info($type);
 	}
	
	//----------------------------------------------------------------------------------------------------
	// Get Meta Data
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $key
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public function getMetaData($key)
	{
		$success = false;
		
		$stored = apc_fetch($key, $success);
		
		if( $success === false || count($stored) !== 3 )
		{
			return false;
		}
		
		list($data, $time, $expire) = $stored;
		
		return 
		[
			'expire' => $time + $expire,
			'mtime'	 => $time,
			'data'	 => unserialize($data)
		];
	}
}