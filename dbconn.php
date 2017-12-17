<?php
//namespace ConnectionNamespace;
//define('DATABASE', 'pg395');
//define('USERNAME', 'pg395');
//define('PASSWORD', 'r4Matf7xW');
//define('CONNECTION', 'sql.njit.edu');
class dbConn{
    //variable to hold connection object.
    protected static $dbConnection;
    //private construct - class cannot be instatiated externally.
    private function __construct() {
        try {
            // assign PDO object to dbConnection variable
            self::$dbConnection = new PDO( 'mysql:host=' . CONNECTION .';dbname=' . DATABASE, USERNAME, PASSWORD );
            self::$dbConnection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        }
		catch (PDOException $excep) {
			//Output error - would normally log this to error file rather than output to user.
            echo "The server gave error as: ".$excep->getMessage()."</br>";
        
            
            
        }
    }
    // get connection function. Static method - accessible without instantiation
    public static function getConnection() {
        //Guarantees single instance, if no connection object exists then create one.
        if (!self::$dbConnection) {
            //new connection object.
            new dbConn();
        }
        //return connection.
        return self::$dbConnection;
    }
}
?>