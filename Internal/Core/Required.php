<?php
//--------------------------------------------------------------------------------------------------
// Required
//--------------------------------------------------------------------------------------------------
//
// Author     : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
// Site       : www.znframework.com
// License    : The MIT License
// Copyright  : Copyright (c) 2012-2016, ZN Framework
//
//--------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------
// Constants
//--------------------------------------------------------------------------------------------------
import(CORE_DIR . 'Constants.php');
//--------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------
// Config Library
//--------------------------------------------------------------------------------------------------
import(CORE_DIR . 'Config.php');
//--------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------
// Aliases
//--------------------------------------------------------------------------------------------------
import(CORE_DIR . 'Autoloader.php');
//--------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------
// Functions
//--------------------------------------------------------------------------------------------------
import(CORE_DIR . 'Functions.php');
//--------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------
// Structure Constants
//--------------------------------------------------------------------------------------------------
import(INTERNAL_CONSTANTS_DIR . 'Structure.php');
//--------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------
// Low Level
//--------------------------------------------------------------------------------------------------
import(INTERNAL_DIR . 'Priority' . DS . 'LowLevel.php');
//--------------------------------------------------------------------------------------------------

if( REQUEST_URI !== NULL )
{
    //----------------------------------------------------------------------------------------------
    // Starting
    //----------------------------------------------------------------------------------------------
    import(CORE_DIR . 'Starting.php');
    //----------------------------------------------------------------------------------------------

    //----------------------------------------------------------------------------------------------
    // Kernel
    //----------------------------------------------------------------------------------------------
    import(CORE_DIR . 'Kernel.php');
    //----------------------------------------------------------------------------------------------

    //----------------------------------------------------------------------------------------------
    // Ending
    //----------------------------------------------------------------------------------------------
    import(CORE_DIR . 'Ending.php');
    //----------------------------------------------------------------------------------------------
}
