<?php
namespace ZN\ViewObjects\Jquery\Helpers;

use ZN\ViewObjects\JqueryTrait;

class Event extends \CallController
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
	// Type                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @var string
	//																						  
	//----------------------------------------------------------------------------------------------------
	protected $type	= '';
	
	//----------------------------------------------------------------------------------------------------
	// Params                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @var string
	//																						  
	//----------------------------------------------------------------------------------------------------
	protected $params = '';
	
	//----------------------------------------------------------------------------------------------------
	// Property                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @var string
	//																						  
	//----------------------------------------------------------------------------------------------------
	protected $property = 'bind';
	
	//----------------------------------------------------------------------------------------------------
	// Click                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function click(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Blur                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function blur(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Change                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function change(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Dblclick                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function dblclick(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Error                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function error(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Resize                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function resize(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Scroll                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function scroll(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Load                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function load(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Ready                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function ready(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Unload                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function unload(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Focus                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function focus(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Focus In                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function focusIn(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Focus Out                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function focusOut(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Select                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function select(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Submit                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function submit(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Key Down                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function keyDown(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Key Press                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function keyPress(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Key Up                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function keyUp(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Hover                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function hover(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}

	//----------------------------------------------------------------------------------------------------
	// Mouse Down                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function mouseDown(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Mouse Enter                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function mouseEnter(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Mouse Leave                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function mouseLeave(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Mouse Move                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function mouseMove(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Mouse Out                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function mouseOut(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Mouse Over                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function mouseOver(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Mouse Up                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function mouseUp(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Toggle                                                              
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $selector
	// @param string $callback
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function toggle(String $selector = NULL, String $callback = NULL)
	{
		$this->_event(__FUNCTION__, $selector, $callback);
		
		return $this->create();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Type                                                             
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $type
	//																						  
	//----------------------------------------------------------------------------------------------------
 	public function type(String $type = 'click')
	{
		$this->property = $type;
		
		return $this;
	}	
	
	//----------------------------------------------------------------------------------------------------
	// Bind                                                             
	//----------------------------------------------------------------------------------------------------
	//
	// @param variadic $args
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function bind(...$args)
	{
		$this->property = __FUNCTION__;
		$this->params   = $args;
		
		return $this;	
	}
	
	//----------------------------------------------------------------------------------------------------
	// Unbind                                                             
	//----------------------------------------------------------------------------------------------------
	//
	// @param variadic $args
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function unbind(...$args)
	{
		$this->property = __FUNCTION__;
		$this->params   = $args;
	
		return $this;	
	}
	
	//----------------------------------------------------------------------------------------------------
	// Trigger                                                             
	//----------------------------------------------------------------------------------------------------
	//
	// @param variadic $args
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function trigger(...$args)
	{
		$this->property = __FUNCTION__;
		$this->params   = $args;
	
		return $this;	
	}
	
	//----------------------------------------------------------------------------------------------------
	// Trigger Handler                                                             
	//----------------------------------------------------------------------------------------------------
	//
	// @param variadic $args
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function triggerHandler(...$args)
	{
		$this->property = __FUNCTION__;
		$this->params   = $args;
		
		return $this;	
	}
	
	//----------------------------------------------------------------------------------------------------
	// Delegate                                                             
	//----------------------------------------------------------------------------------------------------
	//
	// @param variadic $args
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function delegate(...$args)
	{
		$this->property = __FUNCTION__;
		$this->params   = $args;
		
		return $this;	
	}
	
	//----------------------------------------------------------------------------------------------------
	// One                                                             
	//----------------------------------------------------------------------------------------------------
	//
	// @param variadic $args
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function one(...$args)
	{
		$this->property = __FUNCTION__;
		$this->params   = $args;
		
		return $this;	
	}
	
	//----------------------------------------------------------------------------------------------------
	// On                                                             
	//----------------------------------------------------------------------------------------------------
	//
	// @param variadic $args
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function on(...$args)
	{
		$this->property = __FUNCTION__;
		$this->params   = $args;
		
		return $this;	
	}
	
	//----------------------------------------------------------------------------------------------------
	// Off                                                             
	//----------------------------------------------------------------------------------------------------
	//
	// @param variadic $args
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function off(...$args)
	{
		$this->property = __FUNCTION__;
		$this->params   = $args;
		
		return $this;	
	}
	
	//----------------------------------------------------------------------------------------------------
	// Live                                                             
	//----------------------------------------------------------------------------------------------------
	//
	// @param variadic $args
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function live(...$args)
	{
		$this->property = __FUNCTION__;
		$this->params   = $args;
		
		return $this;	
	}
	
	//----------------------------------------------------------------------------------------------------
	// Remove                                                             
	//----------------------------------------------------------------------------------------------------
	//
	// @param variadic $args
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function remove(...$args)
	{
		$this->property = 'die';
		$this->params   = $args;
		
		return $this;	
	}
	
	//----------------------------------------------------------------------------------------------------
	// Complete                                                             
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function complete()
	{	
		if( isset($this->callback) ) 
		{
			$this->params[] = $this->callback;
		}
		
		$event = \JQ::property($this->property, $this->params);
		
		$this->_defaultVariable();
		
		return $event;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Create                                                             
	//----------------------------------------------------------------------------------------------------
	//
	// @param variadic $args
	//																						  
	//----------------------------------------------------------------------------------------------------
	public function create(...$args)
	{
		$combineEvent = $args;
		
		$event  = EOL.\JQ::selector($this->selector);
		$event .= $this->complete();
		if( ! empty($combineEvent))foreach($combineEvent as $e)
		{			
			$event .= $e;
		}
		
		$event .= ";";
		
		return $this->_tag($event);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Protected                                                              
	//----------------------------------------------------------------------------------------------------
	protected function _event($type, $selector, $callback)
	{
		$this->property = strtolower($type);
		
		if( ! empty($selector))
		{
			$this->selector($selector);	
		}
		
		if( ! empty($callback))
		{
			$this->callback('e', $callback);	
		}
	}

	//----------------------------------------------------------------------------------------------------
	// Protected                                                              
	//----------------------------------------------------------------------------------------------------
	protected function _defaultVariable()
	{
		$this->selector = 'this';
		$this->type		= '';
		$this->callback = '';
		$this->property = 'bind';
		$this->params   = '';
	}
}