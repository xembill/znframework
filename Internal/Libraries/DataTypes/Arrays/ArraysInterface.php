<?php namespace ZN\DataTypes;

interface ArraysInterface
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
    // Casing
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array  $array
    // @param string $type  : lower, upper, title
    // @param string $keyval: all, key, val
    //
    //--------------------------------------------------------------------------------------------------------
    public function casing(Array $array, String $type = 'lower', String $keyval = 'all') : Array;

    //--------------------------------------------------------------------------------------------------------
    // Remove Last
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array   $array
    // @param numeric $count
    //
    //--------------------------------------------------------------------------------------------------------
    public function removeLast(Array $array, Int $count = 1) : Array;

    // Remove First
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array   $array
    // @param numeric $count
    //
    //--------------------------------------------------------------------------------------------------------
    public function removeFirst(Array $array, Int $count = 1) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Add First
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array $array
    // @param mixed $element
    //
    //--------------------------------------------------------------------------------------------------------
    public function addFirst(Array $array, $element) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Add Last
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array $array
    // @param mixed $element
    //
    //--------------------------------------------------------------------------------------------------------
    public function addLast(Array $array, $element) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Delete Element
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array $array
    // @param mixed $object
    //
    //--------------------------------------------------------------------------------------------------------
    public function deleteElement(Array $array, $object) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Multikey
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array  $array
    // @param string $keySplit:|
    //
    //--------------------------------------------------------------------------------------------------------
    public function multikey(Array $array, String $keySplit = '|') : Array;

    //--------------------------------------------------------------------------------------------------------
    // Keyval
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array  $array
    // @param string $keyval: val/value, key, vals/values, keys
    //
    //--------------------------------------------------------------------------------------------------------
    public function keyval(Array $array, String $keyval = 'val');

    //--------------------------------------------------------------------------------------------------------
    // Get Last
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array   $array
    // @param numeric $count
    // @param bool    $preserveKey
    //
    //--------------------------------------------------------------------------------------------------------
    public function getLast(Array $array, Int $count = 1, Bool $preserveKey = false);

    //--------------------------------------------------------------------------------------------------------
    // Get First
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array   $array
    // @param numeric $count
    // @param bool    $preserveKey
    //
    //--------------------------------------------------------------------------------------------------------
    public function getFirst(Array $array, Int $count = 1, Bool $preserveKey = false);

    //--------------------------------------------------------------------------------------------------------
    // Order
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array  $array
    // @param string $type :desc, asc...
    // @param string $flags:regular
    //
    //--------------------------------------------------------------------------------------------------------
    public function order(Array $array, String $type = NULL, String $flags = 'regular') : Array;

    //--------------------------------------------------------------------------------------------------------
    // Object Data
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array   $array
    //
    //--------------------------------------------------------------------------------------------------------
    public function objectData(Array $data) : String;

    //--------------------------------------------------------------------------------------------------------
    // Length
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array   $array
    //
    //--------------------------------------------------------------------------------------------------------
    public function length(Array $data) : Int;

    //--------------------------------------------------------------------------------------------------------
    // Apportion
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array   $array
    // @param numeric $portionCount
    // @param bool    $preserveKeys
    //
    //--------------------------------------------------------------------------------------------------------
    public function apportion(Array $data, Int $portionCount = 1, Bool $preserveKeys = false) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Combine
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array $keys
    // @param array $values
    //
    //--------------------------------------------------------------------------------------------------------
    public function combine(Array $keys, Array $values) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Count Same Values
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array $array
    // @param mixed $key
    //
    //--------------------------------------------------------------------------------------------------------
    public function countSameValues(Array $array, String $key);

    //--------------------------------------------------------------------------------------------------------
    // Flip
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array   $array
    //
    //--------------------------------------------------------------------------------------------------------
    public function flip(Array $array) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Transform
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array   $array
    //
    //--------------------------------------------------------------------------------------------------------
    public function transform(Array $array) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Implement Callback(Map)
    //--------------------------------------------------------------------------------------------------------
    //
    // @param ...args
    //
    //--------------------------------------------------------------------------------------------------------
    public function implementCallback(...$args) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Map
    //--------------------------------------------------------------------------------------------------------
    //
    // @param ...args
    //
    //--------------------------------------------------------------------------------------------------------
    public function map(...$args) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Recursive Merge
    //--------------------------------------------------------------------------------------------------------
    //
    // @param ...args
    //
    //--------------------------------------------------------------------------------------------------------
    public function recursiveMerge(...$args) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Merge
    //--------------------------------------------------------------------------------------------------------
    //
    // @param ...args
    //
    //--------------------------------------------------------------------------------------------------------
    public function merge(...$args) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Intersect
    //--------------------------------------------------------------------------------------------------------
    //
    // @param ...args
    //
    //--------------------------------------------------------------------------------------------------------
    public function intersect(...$args) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Reverse
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array   $array
    // @param bool    $preserveKeys
    //
    //--------------------------------------------------------------------------------------------------------
    public function reverse(Array $array, Bool $preserveKeys = false) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Product
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array   $array
    //
    //--------------------------------------------------------------------------------------------------------
    public function product(Array $array) : Float;

    //--------------------------------------------------------------------------------------------------------
    // Sum
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array   $array
    //
    //--------------------------------------------------------------------------------------------------------
    public function sum(Array $array) : Float;

    //--------------------------------------------------------------------------------------------------------
    // Random
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array   $array
    // @param numeric $countRequest
    //
    //--------------------------------------------------------------------------------------------------------
    public function random(Array $array, Int $countRequest);

    //--------------------------------------------------------------------------------------------------------
    // Search
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array $array
    // @param mixed $element
    // @param bool  $strict
    //
    //--------------------------------------------------------------------------------------------------------
    public function search(Array $array, $element, Bool $strict = false);

    //--------------------------------------------------------------------------------------------------------
    // Value Exists
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array $array
    // @param mixed $element
    // @param bool  $strict
    //
    //--------------------------------------------------------------------------------------------------------
    public function valueExists(Array $array, $element, Bool $strict = false) : Bool;

    //--------------------------------------------------------------------------------------------------------
    // Key Exists
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array $array
    // @param mixed $key
    //
    //--------------------------------------------------------------------------------------------------------
    public function keyExists(Array $array, $key) : Bool;

    //--------------------------------------------------------------------------------------------------------
    // Section
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array   $array
    // @param numeric $start
    // @param numeric $length
    // @param bool    $preserveKey
    //
    //--------------------------------------------------------------------------------------------------------
    public function section(Array $array, Int $start = 0, Int $length = NULL, Bool $preserveKeys = false) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Resection
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array   $array
    // @param numeric $start
    // @param numeric $length
    // @param mixed   $newElement
    //
    //--------------------------------------------------------------------------------------------------------
    public function resection(Array $array, Int $start = 0, Int $length = NULL, $newElement = NULL) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Delete Recurrent
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array  $array
    // @param string $flags
    //
    //--------------------------------------------------------------------------------------------------------
    public function deleteRecurrent(Array $array, String $flags = 'string') : Array;

    //--------------------------------------------------------------------------------------------------------
    // Series
    //--------------------------------------------------------------------------------------------------------
    //
    // @param numeric $start
    // @param numeric $end
    // @param numeric $count
    //
    //--------------------------------------------------------------------------------------------------------
    public function series(Int $start, Int $end, Int $step = 1) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Column
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array   $array
    // @param mixed   $columnKey
    // @param mixed   $indexKey
    //
    //--------------------------------------------------------------------------------------------------------
    public function column(Array $array, $columnKey, $indexKey) : Array;

    //--------------------------------------------------------------------------------------------------------
    // excluding
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array   $array
    // @param array   $excluding
    //
    //--------------------------------------------------------------------------------------------------------
    public function excluding(Array $array, Array $excluding) : Array;

    //--------------------------------------------------------------------------------------------------------
    // including
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array   $array
    // @param array   $excluding
    //
    //--------------------------------------------------------------------------------------------------------
    public function including(Array $array, Array $including) : Array;

    //--------------------------------------------------------------------------------------------------------
    // each
    //--------------------------------------------------------------------------------------------------------
    //
    // @param array    $array
    // @param callable $callable
    //
    //--------------------------------------------------------------------------------------------------------
    public function each(Array $array, $callable);
}
