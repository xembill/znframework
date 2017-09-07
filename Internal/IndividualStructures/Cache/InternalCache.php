<?php namespace ZN\IndividualStructures;

use Support, CLController, DriverAbility, Buffer;

class InternalCache extends CLController implements InternalCacheInterface
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

    use DriverAbility;

    //--------------------------------------------------------------------------------------------------------
    // Consts
    //--------------------------------------------------------------------------------------------------------
    //
    // @const string
    //
    //--------------------------------------------------------------------------------------------------------
    const config = 'IndividualStructures:cache';
    const driver =
    [
        'options'   => ['file', 'apc', 'apcu', 'memcache', 'redis', 'wincache'],
        'namespace' => 'ZN\IndividualStructures\Cache\Drivers'
    ];

    protected $codeCount = 0;

    public function code(Callable $function, Int $time, String $compress = 'gz')
    {
        $this->codeCount++;

        $name = 'code-' . $this->codeCount . '-' . CURRENT_CONTROLLER . '-' . CURRENT_CFUNCTION;

        if( ! $select = $this->select($name, $compress) )
        {
            $output = Buffer::callback($function);

            $this->insert($name, $output, $time, 'gz');

            return $output;
        }
        else
        {
            return $select;
        }
    }

    //--------------------------------------------------------------------------------------------------------
    // Select
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $key
    // @param  mixed $expressed
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public function select(String $key, $compressed = false)
    {
        return $this->driver->select($key, $compressed);
    }

    //--------------------------------------------------------------------------------------------------------
    // Insert
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $key
    // @param  variable $var
    // @param  numeric $time
    // @param  mixed $expressed
    // @return bool
    //
    //--------------------------------------------------------------------------------------------------------
    public function insert(String $key, $var, Int $time = 60, $compressed = false) : Bool
    {
        return $this->driver->insert($key, $var, $time, $compressed);
    }

    //--------------------------------------------------------------------------------------------------------
    // Delete
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $key
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public function delete(String $key) : Bool
    {
        return $this->driver->delete($key);
    }

    //--------------------------------------------------------------------------------------------------------
    // Increment
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $key
    // @param  numeric $increment
    // @return void
    //
    //--------------------------------------------------------------------------------------------------------
    public function increment(String $key, Int $increment = 1) : Int
    {
        return $this->driver->increment($key, $increment);
    }

    //--------------------------------------------------------------------------------------------------------
    // Deccrement
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $key
    // @param  numeric $decrement
    // @return void
    //
    //--------------------------------------------------------------------------------------------------------
    public function decrement(String $key, Int $decrement = 1) : Int
    {
        return $this->driver->decrement($key, $decrement);
    }

    //--------------------------------------------------------------------------------------------------------
    // Clean
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  void
    // @return void
    //
    //--------------------------------------------------------------------------------------------------------
    public function clean() : Bool
    {
        return $this->driver->clean();
    }

    //--------------------------------------------------------------------------------------------------------
    // Info
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  mixed  $info
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public function info($type = NULL) : Array
    {
        return $this->driver->info($type);
    }

    //--------------------------------------------------------------------------------------------------------
    // Get Meta Data
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string  $key
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public function getMetaData(String $key) : Array
    {
        return $this->driver->getMetaData($key);
    }
}
