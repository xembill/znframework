<?php namespace ZN\ViewObjects\Bootstrap\Sheet\Helpers;

interface ManipulationInterface
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------------
    // Attr
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array $attr
    //
    //--------------------------------------------------------------------------------------------------------
    public function attr(Array $attr) : String;

    //--------------------------------------------------------------------------------------------------------
    // File
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $file
    //
    //--------------------------------------------------------------------------------------------------------
    public function file(String $file) : Manipulation;

    //--------------------------------------------------------------------------------------------------------
    // Get Selector
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $selector
    //
    //--------------------------------------------------------------------------------------------------------
    public function getSelector(String $selector) : String;

    //--------------------------------------------------------------------------------------------------------
    // Set Selector
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $selector
    // @param array  $attr
    //
    //--------------------------------------------------------------------------------------------------------
    public function setSelector(String $selector, Array $attr) : Bool;
}
