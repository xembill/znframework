<?php namespace ZN\Database\Drivers;

use ZN\Database\Abstracts\DriverConnectionMappingAbstract;

class SQLiteDriver extends DriverConnectionMappingAbstract
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
		'autoIncrement' => 'AUTOINCREMENT',
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
		'int' 			=> 'INTEGER',
		'smallInt'		=> 'SMALLINT',
		'tinyInt'		=> 'TINYINT',
		'mediumInt'		=> 'MEDIUMINT',
		'bigInt'		=> 'BIGINT',
		'decimal'		=> 'DECIMAL',
		'double'		=> 'DOUBLE',
		'float'			=> 'FLOAT',
		'char'			=> 'CHARACTER',
		'varChar'		=> 'VARCHAR',
		'tinyText'		=> 'VARCHAR(255)',
		'text'			=> 'TEXT',
		'mediumText'	=> 'CLOB',
		'longText'		=> 'BLOB',
		'date'			=> 'DATE',
		'dateTime'		=> 'DATETIME',
		'time'			=> 'DATE',
		'timeStamp'		=> 'DATETIME'
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
		\Support::extension('SQLite3', 'SQLite3');
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
		
		try
		{
			$this->connect = 	( ! empty($this->config['password']) )
							 	? new \SQLite3($this->config['database'], SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE, $this->config['password'])
							  	: new \SQLite3($this->config['database']);
		}	
		catch(Exception $e)
		{
			die(getErrorMessage('Database', 'mysqlConnectError'));
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
		return $this->query = $this->connect->query($query);
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
		return $this->connect->exec('BEGIN TRANSACTION');
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
		return $this->connect->exec('ROLLBACK');		 
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
		return $this->connect->exec('END TRANSACTION');
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
		return $this->connect->lastInsertRowID();
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
		
		$dataTypes = array
		(
			SQLITE3_INTEGER	=> 'integer',
			SQLITE3_FLOAT	=> 'float',
			SQLITE3_TEXT	=> 'text',
			SQLITE3_BLOB	=> 'blob',
			SQLITE3_NULL	=> 'null'
		);
		
		$columns = [];
		$count   = $this->numFields();

		for ($i = 0; $i < $count; $i++)
		{	
			$type 		= $this->query->columnType($i);
			$fieldName 	= $this->query->columnName($i);
			
			$columns[$fieldName]				= new \stdClass();
			$columns[$fieldName]->name			= $fieldName;
			$columns[$fieldName]->type			= isset($dataTypes[$type]) ? $dataTypes[$type] : $type;
			$columns[$fieldName]->maxLength		= NULL;
			$columns[$fieldName]->primaryKey	= NULL;
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
		if( empty($this->result) ) 
		{
			return false;
		}
		
		return count($this->result());
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
		$num_fields = $this->numFields();
		
		for($i=0; $i < $num_fields; $i++)
		{		
			$columns[] = $this->query->columnName($i);
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
		if( ! empty($this->query) )
		{
			return $this->query->numColumns();
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
	public function realEscapeString($data)
	{
		if( empty($this->connect) ) 
		{
			return false;
		}
		
		return $this->connect->escapeString($data);
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
		if( ! empty($this->connect) )
		{
			return $this->connect->lastErrorMsg();
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
			return $this->query->fetchArray(SQLITE3_BOTH);
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
			return $this->query->fetchArray(SQLITE3_ASSOC);
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
			return $this->query->fetchArray();
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
		if( ! empty($this->connect) )
		{
			return  $this->connect->changes();
		}
		else
		{
			return false;	
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
		if( ! empty($this->connect) ) 
		{
			@$this->connect->close(); 
		}
		else 
		{
			return false;
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// Version
	//----------------------------------------------------------------------------------------------------
	//
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function version($v = 'versionString')
	{
		if( ! empty($this->connect) )
		{
			$version = \SQLite3::version();
			
			return $version[$v];
		}
		else
		{
			return false;
		}
	}
}