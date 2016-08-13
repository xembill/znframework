<?php namespace ZN\ViewObjects;

class InternalSheet extends \CallController implements SheetInterface
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
	// Style Sheet Trait
	//----------------------------------------------------------------------------------------------------
	// 
	// methods
	//
	//----------------------------------------------------------------------------------------------------
	use SheetTrait;
	
	//----------------------------------------------------------------------------------------------------
	// Animation
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function animation(Bool $tag = false) : Sheet\Helpers\Animation
	{
		return uselib('Animation', [$tag]);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Manipulation
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function manipulation() : Sheet\Helpers\Manipulation
	{
		return uselib('Manipulation');
	}
	
	//----------------------------------------------------------------------------------------------------
	// Shadow
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function shadow(Bool $tag = false) : Sheet\Helpers\Shadow
	{
		return uselib('Shadow', [$tag]);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Transform
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function transform(Bool $tag = false) : Sheet\Helpers\Transform
	{
		return uselib('Transform', [$tag]);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Transition
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function transition(Bool $tag = false) : Sheet\Helpers\Transition
	{
		return uselib('Transition', [$tag]);
	}
}