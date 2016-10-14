<?php namespace ZN\Services\Request;

interface InternalURLInterface
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
    // Base
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $uri: empty
    // @param  numeric $index:  0
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public function base(String $uri = '', Int $index = 0) : String;

    //--------------------------------------------------------------------------------------------------------
    // Site
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $uri: empty
    // @param  numeric $index:  0
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public function site(String $uri = '', Int $index = 0) : String;

    //--------------------------------------------------------------------------------------------------------
    // Current
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $fix empty
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public function current(String $fix = NULL) : String;

    //--------------------------------------------------------------------------------------------------------
    // Host
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $uri: empty
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public function host(String $uri = '') : String;

    //--------------------------------------------------------------------------------------------------------
    // Prev
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  void
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public function prev() : String;

    //--------------------------------------------------------------------------------------------------------
    // Base 64 Decode
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $data: empty
    // @param  bool    $strict: false
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public function base64Decode(String $data, Bool $strict = false) : String;

    //--------------------------------------------------------------------------------------------------------
    // Base 64 Encode
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $data: empty
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public function base64Encode(String $data) : String;

    //--------------------------------------------------------------------------------------------------------
    // Headers
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $url: empty
    // @param  string $format: 0
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public function headers(String $url, Int $format = 0) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Headers
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $fileName: empty
    // @param  bool   $useIncludePath: false
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public function metaTags(String $fileName, Bool $useIncludePath = false) : Array;

    //--------------------------------------------------------------------------------------------------------
    // Build Query
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $data         : empty
    // @param  string $numericPrefix: NULL
    // @param  string $separator    : NULL
    // @param  string $enctype      : RFC1738
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public function buildQuery(String $data, String $numericPrefix = NULL, String $separator = NULL, String $enctype = 'RFC1738') : String;

    //--------------------------------------------------------------------------------------------------------
    // Parse
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $url      : empty
    // @param  numeric $component: 1
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public function parse(String $url, Int $component = 1);

    //--------------------------------------------------------------------------------------------------------
    // Raw Decode
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $str: empty
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public  function rawDecode(String $str) : String;

    //--------------------------------------------------------------------------------------------------------
    // Raw Encode
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $str: empty
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public function rawEncode(String $str) : String;

    //--------------------------------------------------------------------------------------------------------
    // Decode
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $str: empty
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public function decode(String $str) : String;

    //--------------------------------------------------------------------------------------------------------
    // Encode
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $str: empty
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public function encode(String $str) : String;
}
