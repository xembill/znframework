<?php namespace ZN\Database\Drivers;

use ZN\Database\Abstracts\DriverConnectionMappingAbstract;

class PDODriver extends DriverConnectionMappingAbstract
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
	// Select Driver
	//----------------------------------------------------------------------------------------------------
	//
	// @var string
	//
	//----------------------------------------------------------------------------------------------------
	protected $selectDriver;
	
	//----------------------------------------------------------------------------------------------------
	// Sub Driver
	//----------------------------------------------------------------------------------------------------
	//
	// @var string
	//
	//----------------------------------------------------------------------------------------------------
	protected $subDriver;
	
	//----------------------------------------------------------------------------------------------------
	// Operators
	//----------------------------------------------------------------------------------------------------
	//
	// @var array
	//
	//----------------------------------------------------------------------------------------------------
	protected $operators =
	[
		'like' => '%'
	];
	
	//----------------------------------------------------------------------------------------------------
	// Statements
	//----------------------------------------------------------------------------------------------------
	//
	// @var array
	//
	//----------------------------------------------------------------------------------------------------
	protected $statements = 
	[
		'autoIncrement' => 'AUTO_INCREMENT',
		'primaryKey'	=> 'PRIMARY KEY',
		'foreignKey'	=> 'FOREIGN KEY',
		'unique'		=> 'UNIQUE',
		'null'			=> 'NULL',
		'notNull'		=> 'NOT NULL',
		'constraint'	=> 'CONSTRAINT',
		'default'		=> 'DEFAULT'
	];
	
	//----------------------------------------------------------------------------------------------------
	// Variable Types
	//----------------------------------------------------------------------------------------------------
	//
	// @var array
	//
	//----------------------------------------------------------------------------------------------------
	protected $variableTypes =
	[
		'int' 			=> 'INT',
		'smallInt'		=> 'SMALLINT',
		'tinyInt'		=> 'TINYINT',
		'mediumInt'		=> 'MEDIUMINT',
		'bigInt'		=> 'BIGINT',
		'decimal'		=> 'DECIMAL',
		'double'		=> 'DOUBLE',
		'float'			=> 'FLOAT',
		'char'			=> 'CHAR',
		'varChar'		=> 'VARCHAR',
		'tinyText'		=> 'TINYTEXT',
		'text'			=> 'TEXT',
		'mediumText'	=> 'MEDIUMTEXT',
		'longText'		=> 'LONGTEXT',
		'date'			=> 'DATE',
		'dateTime'		=> 'DATETIME',
		'time'			=> 'TIME',
		'timeStamp'		=> 'TIMESTAMP'
	];
	
	//----------------------------------------------------------------------------------------------------
	// Construct
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function __construct()
	{
		\Support::extension('PDO', 'PDO');
	}
	
	//----------------------------------------------------------------------------------------------------
	// Connect
	//----------------------------------------------------------------------------------------------------
	//
	// @param array $config
	//
	//----------------------------------------------------------------------------------------------------
	public function connect($config = [])
	{
		$this->config = $config;
		
		if( strstr($this->config['driver'], ':') )
		{
			$subdrivers = explode(":", $this->config['driver']);
			$this->selectDriver  = $subdrivers[1];
		}
		
		if( empty($this->selectDriver) ) 
		{
			$this->selectDriver = 'mysql';
		}
		
		$this-> connect = $this->_subDrivers($this->config['user'], $this->config['password']); 	
		
		if( $this->selectDriver === 'mysql' )
		{
			if( ! empty($this->config['charset']) )
			{   
				$this->connect->exec("SET NAMES '".$this->config['charset']."'");
			}
			if( ! empty($this->config['charset']) )
			{   
				$this->connect->exec('SET CHARACTER SET '.$this->config['charset']);	
			}
			if( ! empty($this->config['collation']) )
			{ 
				$this->connect->exec("SET COLLATION_CONNECTION = '".$this->config['collation']."'");	
			}
		}
	}	

	//----------------------------------------------------------------------------------------------------
	// Exec
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $query
	// @param array  $security
	//
	//----------------------------------------------------------------------------------------------------
	public function exec($query, $security = NULL)
	{
		if( empty($query) )
		{
			return false;
		}
		
		return $this->connect->exec($query);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Multi Query
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $query
	// @param array  $security
	//
	//----------------------------------------------------------------------------------------------------
	public function multiQuery($query, $security = NULL)
	{
		return $this->query($query, $security);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Query
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $query
	// @param array  $security
	//
	//----------------------------------------------------------------------------------------------------
	public function query($query, $security = [])
	{
		$this->query = $this->connect->prepare($query);
		return $this->query->execute($security);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Trans Start
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function transStart()
	{
		return $this->connect->beginTransaction();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Trans Roll Back
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function transRollback()
	{
		return $this->connect->rollBack(); 
	}
	
	//----------------------------------------------------------------------------------------------------
	// Trans Commit
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function transCommit()
	{
		return $this->connect->commit();
	}

	//----------------------------------------------------------------------------------------------------
	// Insert ID
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function insertID()
	{
		if( ! empty($this->connect) )
		{
			return $this->connect->lastInsertId('id');
		}
		else
		{
			return false;
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// Column Data
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $column
	//
	//----------------------------------------------------------------------------------------------------
	public function columnData($col = '')
	{
		if( empty($this->query) ) 
		{
			return false;
		}
		
		$columns = [];
		
		$count = $this->numFields();

		for( $i = 0; $i < $count; $i++ )
		{
			$field     = $this->query->getColumnMeta($i);
			$fieldName = $field['name'];
			
			$columns[$fieldName]				= new \stdClass();
			$columns[$fieldName]->name			= $fieldName;
			$columns[$fieldName]->type			= $field['native_type'];
			$columns[$fieldName]->maxLength		= ($field['len'] > 0) ? $field['len'] : NULL;
			$columns[$fieldName]->primaryKey	= (int) ( ! empty($field['flags']) && in_array('primary_key', $field['flags'], TRUE));
			$columns[$fieldName]->default		= NULL;
		}
		
		if( isset($columns[$col]) )
		{
			return $columns[$col];
		}
		
		return $columns;
	
	}
	
	//----------------------------------------------------------------------------------------------------
	// Num Rows
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function numRows()
	{
		return $this->query->rowCount();	
	}
	
	//----------------------------------------------------------------------------------------------------
	// Columns
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function columns()
	{
		if( empty($this->query) ) 
		{
			return false;
		}
		
		$columns = [];
		
		$total_columns = $this->numFields();
		
		for ($i = 0; $i < $total_columns; $i ++) 
		{
			$meta = $this->query->getColumnMeta($i);
			
			if($meta['name'] !== NULL)
				$columns[] = $meta['name'];
		}
		
		return $columns;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Num Fields
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function numFields()
	{
		if( isset($this->query) )
		{
			return $this->query->columnCount();
		}
		else
		{
			return 0;
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// Real Escape String
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $data
	//
	//----------------------------------------------------------------------------------------------------
	public function realEscapeString($data = '')
	{
		if( empty($this->connect) ) 
		{
			return false;
		}
		
		return $this->connect->quote($data);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Error
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function error()
	{
		if( isset($this->connect) )
		{
			$error = $this->connect->errorInfo();
			return $error[2];
		}
		else
		{
			return false;
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// Fetch Array
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function fetchArray()
	{
		if( ! empty($this->query) )
		{
			return $this->query->fetch(\PDO::FETCH_BOTH);
		}
		else
		{
			return false;	
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// Fetch Assoc
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function fetchAssoc()
	{
		if( ! empty($this->query) )
		{
			return $this->query->fetch(\PDO::FETCH_ASSOC);
		}
		else
		{
			return false;	
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// Fetch Row
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function fetchRow()
	{
		if( ! empty($this->query) )
		{
			return $this->query->fetch();
		}
		else
		{
			return 0;	
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// Affected Rows
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function affectedRows()
	{
		if( ! empty($this->query) )
		{
			return $this->query->rowCount();
		}
		else
		{
			return 0;	
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// Close
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function close()
	{
		if( isset($this->connect) ) 
		{
			$this->connect = NULL;	
		}
	}

	//----------------------------------------------------------------------------------------------------
	// Version
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function version()
	{
		if( ! empty($this->connect) ) 
		{
			return $this->connect->getAttribute(\PDO::ATTR_SERVER_VERSION);
		}
		else
		{
			return false;
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// Protected Sub Drivers
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $usr
	// @param string $pass
	//
	//----------------------------------------------------------------------------------------------------
	protected function _subDrivers($usr, $pass)
	{
		$namespace = 'ZN\Database\Drivers\PDO\Drivers\\'; 

		$driver = $namespace.'PDO'.$this->selectDriver.'Driver';
	
		$this->subDriver = new $driver;
	
		try
		{
			return new \PDO($this->subDriver->dsn(), $usr, $pass);
		}
		catch( \PDOException $e )
		{
			die(getErrorMessage('Database', 'mysqlConnectError'));
		}
	}
}