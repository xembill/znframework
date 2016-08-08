<?php
namespace ZN\ViewObjects;

class InternalJquery extends \CallController implements JqueryInterface
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
	// Jquery Trait                                                                 
	//----------------------------------------------------------------------------------------------------
	//
	// @methods
	//																						  
	//----------------------------------------------------------------------------------------------------
	use JqueryTrait;
	
	//----------------------------------------------------------------------------------------------------
	// Namespace                                                                  
	//----------------------------------------------------------------------------------------------------
	//
	// @var string
	//																						  
	//----------------------------------------------------------------------------------------------------
	protected $namespace = 'ZN\ViewObjects\Jquery\Helpers\\';
	
	//----------------------------------------------------------------------------------------------------
	// Property Queue                                                                  
	//----------------------------------------------------------------------------------------------------
	//
	// @var string
	//																						  
	//----------------------------------------------------------------------------------------------------	
	protected $propertyQueue = '';
	
	//----------------------------------------------------------------------------------------------------
	// Property                                                                 
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $property
	// @param variadic $attr
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function property(String $property, ...$attr)
	{
		$this->propertyQueue .= \JQ::property($property, $attr);

		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Complete                                                                 
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function complete() : String
	{
		$complete = $this->propertyQueue;

		$this->_defaultVariable();
		
		return $complete;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Create                                                                 
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function create(...$args) : String
	{
		$combineFunction = $args;
		
		$complete  = EOL.\JQ::selector($this->selector);
		
		$complete .= $this->complete();		
			
		if( ! empty($combineFunction)) foreach( $combineFunction as $function )
		{			
			$complete .= $function;
		}
		
		$complete .= ";";
		
		return $complete;	
	}
	
	//----------------------------------------------------------------------------------------------------
	// Ajax
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function ajax(Bool $tag = false, Bool $jq = false, Bool $jqui = false)
	{
		return uselib($this->namespace.'Ajax', [$tag, $jq, $jqui]);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Action
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function action(Bool $tag = false, Bool $jq = false, Bool $jqui = false)
	{
		return uselib($this->namespace.'Action', [$tag, $jq, $jqui]);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Animate
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function animate(Bool $tag = false, Bool $jq = false, Bool $jqui = false)
	{
		return uselib($this->namespace.'Animate', [$tag, $jq, $jqui]);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Event
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function event(Bool $tag = false, Bool $jq = false, Bool $jqui = false)
	{
		return uselib($this->namespace.'Event', [$tag, $jq, $jqui]);
	}

	//----------------------------------------------------------------------------------------------------
	// Protected Variable                                                                 
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//																						  
	//----------------------------------------------------------------------------------------------------
	protected function _defaultVariable()
	{
		$this->selector = 'this';
		$this->propertyQueue = '';
	}
}