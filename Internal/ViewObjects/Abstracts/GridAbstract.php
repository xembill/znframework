<?php namespace ZN\ViewObjects\Abstracts;

use CLController;

abstract class GridAbstract extends CLController
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
    // Create
    //--------------------------------------------------------------------------------------------------------
    //
    // @param mixed $app
    //
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    abstract public function create() : String;

    //--------------------------------------------------------------------------------------------------------
    // limit()
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $limit
    //
    //--------------------------------------------------------------------------------------------------------
    abstract public function limit(Int $limit);
}