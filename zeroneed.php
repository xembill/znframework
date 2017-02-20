<?php
//--------------------------------------------------------------------------------------------------
// ZERONEED PHP WEB FRAMEWORK
//--------------------------------------------------------------------------------------------------
//
// Author     : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
// Site       : www.znframework.com
// License    : The MIT License
// Copyright  : Copyright (c) 2012-2016, ZN Framework
//
//--------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------
// Start
//--------------------------------------------------------------------------------------------------
//
// Microtime
//
//--------------------------------------------------------------------------------------------------
$start = microtime();

//--------------------------------------------------------------------------------------------------
// DS
//--------------------------------------------------------------------------------------------------
//
// @return const DIRECTORY_SEPARATOR
//
//--------------------------------------------------------------------------------------------------
define('DS', DIRECTORY_SEPARATOR);

//--------------------------------------------------------------------------------------------------
// REAL_BASE_DIR
//--------------------------------------------------------------------------------------------------
//
// @return /
//
//--------------------------------------------------------------------------------------------------
define('REAL_BASE_DIR', realpath(__DIR__) . DS);

//--------------------------------------------------------------------------------------------------
// Current Working Dir
//--------------------------------------------------------------------------------------------------
//
// @return /
//
//--------------------------------------------------------------------------------------------------
chdir(REAL_BASE_DIR);

//--------------------------------------------------------------------------------------------------
// INTERNAL_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Internal/
//
//--------------------------------------------------------------------------------------------------
define('INTERNAL_DIR', REAL_BASE_DIR . 'Internal' . DS);

//--------------------------------------------------------------------------------------------------
// Require Base Level
//--------------------------------------------------------------------------------------------------
//
// @return Internal/Priority/BaseLevel.php
//
//--------------------------------------------------------------------------------------------------
require INTERNAL_DIR . 'Priority' . DS . 'BaseLevel.php';

//--------------------------------------------------------------------------------------------------
// Require High Level
//--------------------------------------------------------------------------------------------------
//
// @return Internal/Priority/HighLevel.php
//
//--------------------------------------------------------------------------------------------------
import(INTERNAL_DIR . 'Priority' . DS . 'HighLevel.php');

//--------------------------------------------------------------------------------------------------
// Internal Current Project
//--------------------------------------------------------------------------------------------------
//
// @param void
//
//--------------------------------------------------------------------------------------------------
internalCurrentProject();

//--------------------------------------------------------------------------------------------------
// Core File
//--------------------------------------------------------------------------------------------------
//
// Internal/Core/Required.php
//
//--------------------------------------------------------------------------------------------------
import(REQUIRED_FILE);

//--------------------------------------------------------------------------------------------------
// Finish
//--------------------------------------------------------------------------------------------------
//
// Microtime
//
//--------------------------------------------------------------------------------------------------
$finish = microtime();

//--------------------------------------------------------------------------------------------------
// Benchmark Table
//--------------------------------------------------------------------------------------------------
//
// Benchmark
//
//--------------------------------------------------------------------------------------------------
internalBenchmarkReport($start, $finish);
