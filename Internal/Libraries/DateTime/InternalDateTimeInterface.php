<?php namespace ZN\DateTime;

interface InternalDateTimeCommonInterface
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
    // Current
    //--------------------------------------------------------------------------------------------------------
    //
    // Aktif saat bilgisini verir.
    //
    // @param  string clock
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public function current(string $clock) : string;

    //--------------------------------------------------------------------------------------------------------
    // To Numeric
    //--------------------------------------------------------------------------------------------------------
    //
    // Tarihi sayısal veriye çevirir.
    //
    // @param  string date
    // @return numeric
    //
    //--------------------------------------------------------------------------------------------------------
    public function toNumeric(string $dateFormat, int $now = NULL) : int;

    //--------------------------------------------------------------------------------------------------------
    // Compare
    //--------------------------------------------------------------------------------------------------------
    //
    // Tarihleri karşılaştırmak için kullanılır.
    //
    // @param  string clock
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public function compare(string $value1, string $condition, string $value2) : string;

    //--------------------------------------------------------------------------------------------------------
    // Calculate
    //--------------------------------------------------------------------------------------------------------
    //
    // Tarihler arasında hesaplama yapmak için kullanılır.
    //
    // @param  string input
    // @param  string calculate
    // @param  string output
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public function calculate(string $input, string $calculate, string $output = 'Y-m-d') : string;

    //--------------------------------------------------------------------------------------------------------
    // Convert
    //--------------------------------------------------------------------------------------------------------
    //
    // Tarih bilgisini dönüştürmek için kullanılır.
    //
    // @param  string $date
    // @param  string $format
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public function convert(string $date, string $format) : string;

    //--------------------------------------------------------------------------------------------------------
    // Standart
    //--------------------------------------------------------------------------------------------------------
    //
    // Standart tarih ve saat bilgisi üretir.
    //
    // @param  void
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public function standart() : string;

    //--------------------------------------------------------------------------------------------------------
    // Set
    //--------------------------------------------------------------------------------------------------------
    //
    // Tarih ve saat ayarlamaları yapmak için kullanılır.
    //
    // @param  string exp
    // @return string
    //
    //--------------------------------------------------------------------------------------------------------
    public function set(string $exp) : string;
}
