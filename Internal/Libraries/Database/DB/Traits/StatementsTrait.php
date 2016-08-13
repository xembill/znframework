<?php namespace ZN\Database\DB\Traits;

trait StatementsTrait
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
	// Property
	//----------------------------------------------------------------------------------------------------
	//
	// @param mixed  $type
	// @param string $col
	// @param bool   $output
	//
	//----------------------------------------------------------------------------------------------------
	public function property($type, String $col = NULL, Bool $output = true) : String
	{
		if( is_array($type) )
		{
			$state = '';
			
			foreach( $type as $key => $val )
			{
				if( ! is_numeric($key) )
				{
					$state .= $this->db->statements($key, $val);
				}
				else
				{
					$state .= $this->db->statements($val);
				}
			}
			
			return $state;
		}
		else
		{
			return $this->db->statements($type, $col, $output);
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// Auto Increment
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $col
	// @param bool   $output
	//
	//----------------------------------------------------------------------------------------------------
	public function autoIncrement(String $col = NULL, Bool $type = true) : String
	{
		return $this->db->statements(__FUNCTION__, $col, $type);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Primary Key
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $col
	// @param bool   $output
	//
	//----------------------------------------------------------------------------------------------------
	public function primaryKey(String $col = NULL, Bool $type = true) : String
	{
		return $this->db->statements(__FUNCTION__, $col, $type);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Foreign Key
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $col
	// @param bool   $output
	//
	//----------------------------------------------------------------------------------------------------
	public function foreignKey(String $col = NULL, Bool $type = true) : String
	{
		return $this->db->statements(__FUNCTION__, $col, $type);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Unique
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $col
	// @param bool   $output
	//
	//----------------------------------------------------------------------------------------------------
	public function unique(String $col = NULL, Bool $type = true) : String
	{
		return $this->db->statements(__FUNCTION__, $col, $type);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Null
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function null() : String
	{
		return $this->db->statements(__FUNCTION__);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Not Null
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function notNull() : String
	{
		return $this->db->statements(__FUNCTION__);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Constraint
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $constraint 
	// @param bool   $type
	//
	//----------------------------------------------------------------------------------------------------
	public function constraint(String $constraint = NULL, Bool $type = false) : String
	{
		return $this->db->statements(__FUNCTION__, $constraint, $type);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Default Value
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $default 
	// @param bool   $type
	//
	//----------------------------------------------------------------------------------------------------
	public function defaultValue(String $default = NULL, Bool $type = false) : String
	{
		if( ! is_numeric($default) )
		{
			$default = presuffix($default, '"');	
		}
		
		return $this->db->statements('default', $default, $type);
	}
}