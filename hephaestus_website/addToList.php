<?php

/* Connecting to the database */
$servername = "sql204.epizy.com";
$username = "epiz_24116330";
$password = "5zz4K0ryfeqg8h";
$dbname = "epiz_24116330_main_database";

try {
    $handler = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /* echo "Connected successfully"; */
}
catch(PDOException $e)
{
    /* echo "Connection failed: " . $e->getMessage(); */
}


$deleteRow = $_POST['rowToDelete'];

if (!($deleteRow == "noRowSelected")) {
    $deleteARow = $handler -> prepare (
        "DELETE FROM `epiz_24116330_main_database`.`to_do_list` WHERE `to_do_list`.`tid` = '$deleteRow';"
    );

    $deleteARow -> execute();

}

$entryTask = $_POST['newTask'];

if (!($entryTask == "")) {
    
    // this converts all symbols to non-special form
    $convertedEntryTask = htmlspecialchars($entryTask, ENT_QUOTES);
    // this removes any HTML or PHP tags
    $convertedEntryTask = strip_tags($convertedEntryTask);

    $entryTaskQuery = $handler -> prepare (
        "INSERT INTO `epiz_24116330_main_database`.`to_do_list`
        (`task`)
        VALUES ('$convertedEntryTask');"
    );

    $entryTaskQuery -> execute();

}

                    
header('Location: http://henryjames20.epizy.com/privPage.php');

?>
