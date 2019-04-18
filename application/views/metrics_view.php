<?php
function metricCount($field,$table,$school)
{
//This is just a file that holds the database info and can be whatever name you want
        $servername = "cissims.mysql.database.azure.com";
        $username = "sims@cissims";
        $password = "Ospreys2019";
        $dbname = "csv_db";
try{
    if($school != '0')
    {
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $connection->prepare("SELECT $field, COUNT(*) AS count FROM $table WHERE School_Number = $school AND Days_Absent < 21 GROUP BY $field");
        $stmt->execute();  
    }
    else
    {
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $connection->prepare("SELECT $field, COUNT(*) AS count FROM $table WHERE Days_Absent < 21 GROUP BY $field");
        $stmt->execute();
    }

    $results=$stmt->fetchAll(PDO::FETCH_ASSOC);
    echo $results;
    // Creates an array similar as the following:
    // $results[0][$field] $results[0]['count']
    // $results[1][$field] $results[1]['count']
    // $results[2][$field] $results[2]['count']
    // with each row as an array of values within a numeric array of all rows

    $dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}

return $results;
}
?>
