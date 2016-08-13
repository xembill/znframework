<?php namespace ZN\ViewObjects;

interface TemplateWizardInterface
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
	// Data
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $string
	// @param array  $data
	//
	//----------------------------------------------------------------------------------------------------
	public static function data(String $string, Array $data = []) : String;
}