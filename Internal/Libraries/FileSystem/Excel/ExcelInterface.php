<?php namespace ZN\FileSystem;

interface ExcelInterface
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
	// Array To XLS
	//----------------------------------------------------------------------------------------------------
	//
	// @param array  $data
	// @param string $file
	//
	//----------------------------------------------------------------------------------------------------
	public function arrayToXLS(Array $data, String $file = 'excel.xls');
	
	//----------------------------------------------------------------------------------------------------
	// CSV To Array
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $file
	//
	//----------------------------------------------------------------------------------------------------
	public function CSVToArray(String $file) : Array;
	
	//----------------------------------------------------------------------------------------------------
	// fileName
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $fileName
	//
	//----------------------------------------------------------------------------------------------------
	public function fileName(String $fileName);
	
	//----------------------------------------------------------------------------------------------------
	// Output
	//----------------------------------------------------------------------------------------------------
	//
	// @param array  $rows
	//
	//----------------------------------------------------------------------------------------------------
	public function rows(Array $rows);
}