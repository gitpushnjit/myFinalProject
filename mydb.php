 <?php
$servername = "sql1.njit.edu";
$username = "pg395";
$password = "r4Matf7xW";

try {
    $conn = new PDO("mysql:host=$servername;dbname=pg395", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?> 