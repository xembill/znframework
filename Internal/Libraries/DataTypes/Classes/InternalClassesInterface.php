<?php namespace ZN\DataTypes;

interface InternalClassesInterface
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
    // Is Relation
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $string
    // @param object $object
    // @param string $prefix
    //
    //--------------------------------------------------------------------------------------------------------
    public function isRelation(String $className, $object) : Bool;

    //--------------------------------------------------------------------------------------------------------
    // Is Parent
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $className
    // @param object $object
    // @param string $prefix
    //
    //--------------------------------------------------------------------------------------------------------
    public function isParent(String $className, $object) : Bool;

    //--------------------------------------------------------------------------------------------------------
    // Method Exists
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $className
    // @param object $object
    // @param string $prefix
    //
    //--------------------------------------------------------------------------------------------------------
    public function methodExists(String $className, String $method) : Bool;

    //--------------------------------------------------------------------------------------------------------
    // Property Exists
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $className
    // @param object $property
    // @param string $prefix
    //
    //--------------------------------------------------------------------------------------------------------
    public function propertyExists(String $className, String $property) : Bool;

    //--------------------------------------------------------------------------------------------------------
    // Methods
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $className
    // @param string $prefix
    //
    //--------------------------------------------------------------------------------------------------------
    public function methods(String $className);

    //--------------------------------------------------------------------------------------------------------
    // Vars
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $className
    // @param string $prefix
    //
    //--------------------------------------------------------------------------------------------------------
    public function vars(String $className);

    //--------------------------------------------------------------------------------------------------------
    // Name
    //--------------------------------------------------------------------------------------------------------
    //
    // @param object $var
    // @param string $prefix
    //
    //--------------------------------------------------------------------------------------------------------
    public function name($var) : String;

    //--------------------------------------------------------------------------------------------------------
    // Declared
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function declared() : Array;

    //--------------------------------------------------------------------------------------------------------
    // Declared Interfaces
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function declaredInterfaces() : Array;

    //--------------------------------------------------------------------------------------------------------
    // Declared Traits
    //--------------------------------------------------------------------------------------------------------
    //
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function declaredTraits() : Array;

    //--------------------------------------------------------------------------------------------------------
    // Only Name
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $class
    //
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public function onlyName(String $class) : String;
}
