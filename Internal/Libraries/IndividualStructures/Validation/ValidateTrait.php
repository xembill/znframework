<?php
namespace ZN\IndividualStructures;

trait ValidateTrait
{
	//----------------------------------------------------------------------------------------------------
	//
	// Yazar      : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
	// Site       : www.zntr.net
	// Lisans     : The MIT License
	// Telif Hakkı: Copyright (c) 2012-2016, zntr.net
	//
	//----------------------------------------------------------------------------------------------------
	
	//----------------------------------------------------------------------------------------------------
	// Settings
	//----------------------------------------------------------------------------------------------------
	//
	// @var array
	//
	//----------------------------------------------------------------------------------------------------
	protected $settings = [];
	
	//----------------------------------------------------------------------------------------------------
	// method()
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $method
	//
	//----------------------------------------------------------------------------------------------------
	public function method(String $method)
	{
		$this->settings['method'] = $method;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// value()
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $value
	//
	//----------------------------------------------------------------------------------------------------
	public function value(String $value)
	{
		$this->settings['value'] = $value;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// required()
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function required()
	{
		$this->settings['config'][] = 'required';
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// numeric()
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function numeric()
	{
		$this->settings['config'][] = 'numeric';
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// match()
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $match
	//
	//----------------------------------------------------------------------------------------------------
	public function match(String $match)
	{
		$this->settings['config']['match'] = $match;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// matchPassword()
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $match
	//
	//----------------------------------------------------------------------------------------------------
	public function matchPassword(String $match)
	{
		$this->settings['config']['matchPassword'] = $match;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// oldPassword()
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $oldPassword
	//
	//----------------------------------------------------------------------------------------------------
	public function oldPassword(String $oldPassword)
	{
		$this->settings['config']['oldPassword'] = $oldPassword;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// compare()
	//----------------------------------------------------------------------------------------------------
	//
	// @param numeric $min
	// @param numeric $max
	//
	//----------------------------------------------------------------------------------------------------
	public function compare(Int $min = NULL, Int $max = NULL)
	{
		$this->settings['config']['minchar'] = $min;
		$this->settings['config']['maxchar'] = $max;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// validate()
	//----------------------------------------------------------------------------------------------------
	//
	// @param args
	//
	//----------------------------------------------------------------------------------------------------
	public function validate(...$args)
	{
		$this->settings['validate'] = $args;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// secure()
	//----------------------------------------------------------------------------------------------------
	//
	// @param args
	//
	//----------------------------------------------------------------------------------------------------
	public function secure(...$args)
	{
		$this->settings['secure'] = $args;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// pattern()
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $pattern
	// @param string $char
	//
	//----------------------------------------------------------------------------------------------------
	public function pattern(String $pattern, String $char = NULL)
	{
		$this->settings['config']['pattern'] = presuffix($pattern).$char;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// phone()
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $design
	//
	//----------------------------------------------------------------------------------------------------
	public function phone(String $design = NULL)
	{
		if( empty($design) )
		{
			$this->settings['config'][] = 'phone';
		}
		else
		{
			$this->settings['config']['phone'] = $design;
		}
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// alpha()
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function alpha()
	{
		$this->settings['config'][] = 'alpha';
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// alnum()
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function alnum()
	{
		$this->settings['config'][] = 'alnum';
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// captcha()
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $captcha
	//
	//----------------------------------------------------------------------------------------------------
	public function captcha(String $captcha)
	{
		$this->settings['config']['captcha'] = $captcha;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Identity
	//----------------------------------------------------------------------------------------------------
	//
	// @param int $no
	//
	//----------------------------------------------------------------------------------------------------
	public function identity(Int $no)
	{
		$numone 	= ($no[0] + $no[2] + $no[4] + $no[6]  + $no[8]) * 7;
		$numtwo 	= $no[1] + $no[3] + $no[5] + $no[7];
		$result 	= $numone - $numtwo;
		$tenth  	= $result%10;
		$total  	= ($no[0] + $no[1] + $no[2] + $no[3] + $no[4] + $no[5] + $no[6] + $no[7] + $no[8] + $no[9]);
		$elewenth 	= $total%10;
		
		if($no[0] == 0)
		{
			return false;
		}
		elseif(strlen($no) != 11)
		{
			return false;
		}
		elseif($no[9] != $tenth)
		{
			return false;
		}
		elseif($no[10] != $elewenth)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// Email
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $no
	//
	//----------------------------------------------------------------------------------------------------
	public function email(String $data)
	{
		if( ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $data) ) 
		{
			return false; 
		}
		else 
		{
			return true;
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// URL
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $data
	//
	//----------------------------------------------------------------------------------------------------
	public function url(String $data)
	{
		if( ! preg_match('#^(\w+:)?//#i', $data) ) 
		{
			return false; 
		}
		else 
		{
			return true;
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// Special Char
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $data
	//
	//----------------------------------------------------------------------------------------------------
	public function specialChar(String $data)
	{
		if( ! preg_match('#[!\'^\#\\\+\$%&\/\(\)\[\]\{\}=\|\-\?:\.\,;_ĞÜŞİÖÇğüşıöç]+#', $data) ) 
		{
			return false; 
		}
		else 
		{
			return true;
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// Maxchar
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $data
	// @param int    $char
	//
	//----------------------------------------------------------------------------------------------------
	public function maxchar(String $data, Int $char)
	{
		if( strlen($data) <= $char ) 
		{
			return true; 
		}
		else 
		{
			return false;
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// Minchar
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $data
	// @param int    $char
	//
	//----------------------------------------------------------------------------------------------------
	public function minchar(String $data, Int $char)
	{
		if( strlen($data) >= $char ) 
		{
			return true; 
		}
		else 
		{
			return false;
		}
	}
}