<?php
class accounts extends corecollection
{
    protected static $modelName = 'account';
    //This is the function to write to find user by ID for login.
    //Don't forget to return the object see findOne in the collection class
    public static function findUserbyEmail($email)
    {
            $tableName = get_called_class();
            $sql = 'SELECT * FROM ' . $tableName . ' WHERE email = ?';
         //grab the only record for find one and return as an object
            $recordsSet = self::getResults($sql, $email);
            if (is_null($recordsSet)) {
                return FALSE;
            } else {
                return $recordsSet[0];
            }
    }
    
    
     public static function getEmail($id)
    {
        $tableName = get_called_class();
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE id = ?';
     //grab the only record for find one and return as an object
        $recordsSet = self::getResults($sql, $id);
        
        if (is_null($recordsSet)) {
            return FALSE;
        } else {
            return $recordsSet[0]->email;
        }    
    }
}