<?php
require("db_connection.php");
try {
    $queryGetAllAccounts = "SELECT * FROM students_tbl";
    $result = mysqli_query($connect, $queryGetAllAccounts);
}
catch (\Throwable $th){
    echo $th;
}
?>