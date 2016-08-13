<?php namespace ZN\Services;

class InternalNet extends \CallController implements NetInterface
{
	//----------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Telif Hakkı: Copyright (c) 2012-2016, znframework.com
    //
    //----------------------------------------------------------------------------------------------------
	
	//----------------------------------------------------------------------------------------------------
	// Check DNS
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $host
	// @param string $type
	//
	//----------------------------------------------------------------------------------------------------
	public function checkDns(String $host, String $type = 'MX') : Bool
	{
		return checkdnsrr($this->cleanHttp($host), $type);
	}
	
	//----------------------------------------------------------------------------------------------------
	// DNS Records
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $host
	// @param string $type
	// @param bool   $raw
	//
	//----------------------------------------------------------------------------------------------------
	public function dnsRecords(String $host, String $type = 'any', Bool $raw = false) : \stdClass
	{
		$dns = dns_get_record($this->cleanHttp($host), \Converter::toConstant($type, 'DNS_'), $auth, $add, $raw);
		
		return (object)
		[
			'records' => $dns,
			'authns'  => $auth,
			'addtl'   => $add
		];
	}
	
	//----------------------------------------------------------------------------------------------------
	// MX Records
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $host
	//
	//----------------------------------------------------------------------------------------------------
	public function mxRecords(String $host) : \stdClass
	{
		$mx = getmxrr($this->cleanHttp($host), $mxhosts, $weight);
		
		return (object)
		[
			'records' => $mxhosts,
			'weight'  => $weight
		];
	}
	
	//----------------------------------------------------------------------------------------------------
	// Socket
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $host
	// @param int    $port
	// @param int    $timeout
	//
	//----------------------------------------------------------------------------------------------------
	public function socket(String $host, Int $port = -1, Int $timeout = 60)
	{
		$socket = fsockopen($this->cleanHttp($host), $port, $errno, $errstr, $timeout);
		
		if( ! empty($errno) )
		{
			return \Exceptions::throws($errno.'-'.$errstr);
		}

		return $socket;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Psocket
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $host
	// @param int    $port
	// @param int    $timeout
	//
	//----------------------------------------------------------------------------------------------------
	public function psocket(String $host, Int $port = -1, Int $timeout = 60)
	{
		$socket = pfsockopen($this->cleanHttp($host), $port, $errno, $errstr, $timeout);
		
		if( ! empty($errno) )
		{
			return \Exceptions::throws($errno.'-'.$errstr);
		}

		return $socket;
	}
	
	//----------------------------------------------------------------------------------------------------
	// IP v4 To Host
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $ip
	//
	//----------------------------------------------------------------------------------------------------
	public function ipv4ToHost(String $ip) : String
	{
		return gethostbyaddr($ip);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Host To IP v4
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $host
	//
	//----------------------------------------------------------------------------------------------------
	public function hostToIpv4(String $host) : String
	{
		return gethostbyname($this->cleanHttp($host));
	}
	
	//----------------------------------------------------------------------------------------------------
	// Host To IP v4 List
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $host
	//
	//----------------------------------------------------------------------------------------------------
	public function hostToIpv4List(String $host) : Array
	{
		return gethostbynamel($this->cleanHttp($host));
	}
	
	//----------------------------------------------------------------------------------------------------
	// Protocol Number
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $name
	//
	//----------------------------------------------------------------------------------------------------
	public function protocolNumber(String $name) : Int
	{
		return getprotobyname($name);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Protocol Name
	//----------------------------------------------------------------------------------------------------
	// 
	// @param int $number
	//
	//----------------------------------------------------------------------------------------------------
	public function protocolName(Int $number) : String
	{
		return getprotobynumber($number);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Service Port
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $service
	// @param string $protocol
	//
	//----------------------------------------------------------------------------------------------------
	public function servicePort(String $service, String $protocol) : Int
	{
		return getservbyname($service, $protocol);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Service Name
	//----------------------------------------------------------------------------------------------------
	// 
	// @param int    $port
	// @param string $protocol
	//
	//----------------------------------------------------------------------------------------------------
	public function serviceName(Int $port, String $protocol) : String
	{
		return getservbyport($port, $protocol);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Local
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function local() : String
	{
		return gethostname();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Rcode
	//----------------------------------------------------------------------------------------------------
	// 
	// @param int $code
	//
	//----------------------------------------------------------------------------------------------------
	public function rcode(Int $code = NULL)
	{
		return http_response_code($code);
	}

	//----------------------------------------------------------------------------------------------------
	// Chr To Ip V4
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $chr
	//
	//----------------------------------------------------------------------------------------------------
	public function chrToIpv4(String $chr) : String
	{
		return inet_ntop($chr);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Ip v4 To Chr
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $addr
	//
	//----------------------------------------------------------------------------------------------------
	public function ipv4ToChr(String $addr) : String
	{
		return inet_pton($addr);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Ip v4 To Number
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $ip
	//
	//----------------------------------------------------------------------------------------------------
	public function ipv4ToNumber(String $ip) : Int
	{
		return ip2long($ip);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Number To IP v4
	//----------------------------------------------------------------------------------------------------
	// 
	// @param int $numberAddress
	//
	//----------------------------------------------------------------------------------------------------
	public function numberToIpv4(Int $numberAddress) : String
	{
		return long2ip($numberAddress);
	}

	//----------------------------------------------------------------------------------------------------
	// Protected Clean HTTP
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $host
	//
	//----------------------------------------------------------------------------------------------------
	protected function cleanHttp($host)
	{
		return str_ireplace(['http://', 'https://'], '', $host);	
	}
}