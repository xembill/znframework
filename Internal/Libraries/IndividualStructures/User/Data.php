<?php namespace ZN\IndividualStructures\User;

use Session, DB;

class Data extends UserCommon implements DataInterface
{
    //--------------------------------------------------------------------------------------------------------
    // Data
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $tbl
    // @return object
    //
    //--------------------------------------------------------------------------------------------------------
    public function get(String $tbl = NULL)
    {
        $usernameColumn = INDIVIDUALSTRUCTURES_USER_CONFIG['matching']['columns']['username'];
        $passwordColumn = INDIVIDUALSTRUCTURES_USER_CONFIG['matching']['columns']['password'];

        if( $sessionUserName = Session::select($usernameColumn) )
        {
            $joinTables      = INDIVIDUALSTRUCTURES_USER_CONFIG['joining']['tables'];
            $usernameColumn  = INDIVIDUALSTRUCTURES_USER_CONFIG['matching']['columns']['username'];
            $joinColumn      = INDIVIDUALSTRUCTURES_USER_CONFIG['joining']['column'];
            $tableName       = INDIVIDUALSTRUCTURES_USER_CONFIG['matching']['table'];

            $this->username  = $sessionUserName;
            $sessionPassword = Session::select($passwordColumn);

            $r[$tbl] = DB::where($usernameColumn, $this->username, 'and')
                         ->where($passwordColumn, $sessionPassword)
                         ->get($tableName)
                         ->row();

            if( ! empty($joinTables) )
            {
                $joinCol = DB::where($usernameColumn, $this->username, 'and')
                             ->where($passwordColumn, $sessionPassword)
                             ->get($tableName)
                             ->row()
                             ->$joinColumn;

                foreach( $joinTables as $table => $joinColumn )
                {
                    $r[$table] = DB::where($joinColumn, $joinCol)
                                   ->get($table)
                                   ->row();
                }
            }

            if( empty($joinTables) )
            {
                return (object) $r[$tbl];
            }
            else
            {
                if( ! empty($tbl) )
                {
                    return (object) $r[$tbl];
                }
                else
                {
                    return (object) $r;
                }
            }
        }
        else
        {
            return false;
        }
    }

    //--------------------------------------------------------------------------------------------------------
    // Active Count
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  void
    // @return numeric
    //
    //--------------------------------------------------------------------------------------------------------
    public function activeCount() : Int
    {
        $activeColumn = INDIVIDUALSTRUCTURES_USER_CONFIG['matching']['columns']['active'];
        $tableName    = INDIVIDUALSTRUCTURES_USER_CONFIG['matching']['table'];

        if( ! empty($activeColumn) )
        {
            $totalRows = DB::where($activeColumn, 1)
                           ->get($tableName)
                           ->totalRows();

            if( ! empty($totalRows) )
            {
                return $totalRows;
            }
            else
            {
                return 0;
            }
        }

        return 0;
    }

    //--------------------------------------------------------------------------------------------------------
    // Banned Count
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  void
    // @return numeric
    //
    //--------------------------------------------------------------------------------------------------------
    public function bannedCount() : Int
    {
        $bannedColumn = INDIVIDUALSTRUCTURES_USER_CONFIG['matching']['columns']['banned'];
        $tableName    = INDIVIDUALSTRUCTURES_USER_CONFIG['matching']['table'];

        if( ! empty($bannedColumn) )
        {
            $totalRows = DB::where($bannedColumn, 1)
                           ->get($tableName)
                           ->totalRows();

            if( ! empty($totalRows) )
            {
                return $totalRows;
            }
            else
            {
                return 0;
            }
        }

        return 0;
    }

    //--------------------------------------------------------------------------------------------------------
    // Count
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  void
    // @return numeric
    //
    //--------------------------------------------------------------------------------------------------------
    public function count() : Int
    {
        $tableName = INDIVIDUALSTRUCTURES_USER_CONFIG['matching']['table'];

        $totalRows = DB::get($tableName)->totalRows();

        if( ! empty($totalRows) )
        {
            return $totalRows;
        }
        else
        {
            return 0;
        }
    }
}
