<?php namespace ZN\ViewObjects;

use Config, CallController;

class InternalCDN extends CallController implements CDNInterface
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
    // Get
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $configName
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function get(String $configName, String $name) : String
    {
        $config = Config::get('ViewObjects', 'cdn');
        
        $configData = ! empty($config[$configName]) ? $config[$configName] : '';
        
        if( empty($configData) )
        {
            return false;   
        }
        
        $data = array_change_key_case($configData);
        
        $name = strtolower($name);

        if( isset($data[$name]) )
        { 
            return $data[$name]; 
        }
        else
        { 
            return $data;
        }
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Image
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function image(String $name) : String
    {
        return $this->get('images', $name);
    }   
    
    //--------------------------------------------------------------------------------------------------------
    // Style
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function style(String $name) : String
    {
        return $this->get('styles', $name);
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Script
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function script(String $name) : String
    {
        return $this->get('scripts', $name);
    }   
    
    //--------------------------------------------------------------------------------------------------------
    // Font
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function font(String $name) : String
    {
        return $this->get('fonts', $name);
    }
    
    //--------------------------------------------------------------------------------------------------------
    // File
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $name
    //
    //--------------------------------------------------------------------------------------------------------
    public function file(String $name) : String
    {
        return $this->get('files', $name);
    }
}