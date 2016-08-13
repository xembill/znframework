<?php namespace ZN\Components;

interface TableInterface
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
	// Attr
	//----------------------------------------------------------------------------------------------------
	// 
	// @param array $attributes
	//
	//----------------------------------------------------------------------------------------------------
	public function attr(Array $attributes) : InternalTable;

	//----------------------------------------------------------------------------------------------------
	// Align
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $align
	//
	//----------------------------------------------------------------------------------------------------
	public function align(String $align) : InternalTable;
	
	//----------------------------------------------------------------------------------------------------
	// Cell
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $spacing
	// @param numeric $padding
	//
	//----------------------------------------------------------------------------------------------------
	public function cell(Int $spacing, Int $padding) : InternalTable;
	
	//----------------------------------------------------------------------------------------------------
	// Cell Spacing
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $spacing
	//
	//----------------------------------------------------------------------------------------------------
	public function cellSpacing(Int $spacing) : InternalTable;
	
	//----------------------------------------------------------------------------------------------------
	// Cell Padding
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $padding
	//
	//----------------------------------------------------------------------------------------------------
	public function cellPadding(Int $padding) : InternalTable;
	
	//----------------------------------------------------------------------------------------------------
	// Border
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $border
	// @param string  $color
	//
	//----------------------------------------------------------------------------------------------------
	public function border(Int $border, String $color) : InternalTable;
	
	//----------------------------------------------------------------------------------------------------
	// Border Size
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $border
	//
	//----------------------------------------------------------------------------------------------------
	public function borderSize(Int $border) : InternalTable;
	
	//----------------------------------------------------------------------------------------------------
	// Border Color
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $color
	//
	//----------------------------------------------------------------------------------------------------
	public function borderColor(String $color) : InternalTable;
	
	//----------------------------------------------------------------------------------------------------
	// Width
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $width
	//
	//----------------------------------------------------------------------------------------------------
	public function width(Int $width) : InternalTable;
	
	//----------------------------------------------------------------------------------------------------
	// Height
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $height
	//
	//----------------------------------------------------------------------------------------------------
	public function height(Int $height) : InternalTable;
	
	//----------------------------------------------------------------------------------------------------
	// Size
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $width
	// @param numeric $height
	//
	//----------------------------------------------------------------------------------------------------
	public function size(Int $width, Int $height) : InternalTable;
	
	//----------------------------------------------------------------------------------------------------
	// Css
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $css
	//
	//----------------------------------------------------------------------------------------------------
	public function css(String $css) : InternalTable;
	
	//----------------------------------------------------------------------------------------------------
	// Style
	//----------------------------------------------------------------------------------------------------
	// 
	// @param array $attributes
	//
	//----------------------------------------------------------------------------------------------------
	public function style(Array $attributes) : InternalTable;
	
	//----------------------------------------------------------------------------------------------------
	// Background
	//----------------------------------------------------------------------------------------------------
	// 
	// @param mixed $background
	//
	//----------------------------------------------------------------------------------------------------
	public function background(String $background) : InternalTable;
	
	//----------------------------------------------------------------------------------------------------
	// Bg Color
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $bgColor
	//
	//----------------------------------------------------------------------------------------------------
	public function bgColor(String $bgColor) : InternalTable;
	
	//----------------------------------------------------------------------------------------------------
	// Content
	//----------------------------------------------------------------------------------------------------
	// 
	// @param variadic $elements
	//
	//----------------------------------------------------------------------------------------------------
	public function content(...$elements) : InternalTable;
	
	//----------------------------------------------------------------------------------------------------
	// Create
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function create() : String;
}