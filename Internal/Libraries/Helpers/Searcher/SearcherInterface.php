<?php namespace ZN\Helpers;

interface SearcherInterface
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
	// Filter
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $column
	// @param string $value
	//
	//--------------------------------------------------------------------------------------------------------	
	public function filter(String $column, $value);
	
	//--------------------------------------------------------------------------------------------------------
	// Or Filter
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $column
	// @param string $value
	//
	//--------------------------------------------------------------------------------------------------------	
	public function orFilter(String $column, $value);
	
	//--------------------------------------------------------------------------------------------------------
	// Word
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $word
	//
	//--------------------------------------------------------------------------------------------------------	
	public function word(String $word);
	
	//--------------------------------------------------------------------------------------------------------
	// Type
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $type
	//
	//--------------------------------------------------------------------------------------------------------
	public function type(String $type);
	
	//--------------------------------------------------------------------------------------------------------
	// Get
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param array  $conditions
	// @param string $word
	// @param string $type: auto, inside, equal, starting, ending
	//
	//--------------------------------------------------------------------------------------------------------
	public function get(Array $conditions, String $word, String $type = 'auto');
	
	//--------------------------------------------------------------------------------------------------------
	// Data
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param mixed  $searchData
	// @param mixed  $searchWord
	// @param string $output: bool, boolean, pos, position, str, string
	//
	//--------------------------------------------------------------------------------------------------------
	public function data($searchData, $searchWord, String $output = 'bool');
}