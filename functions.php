<?php
function getPositions(){
    include 'db_config.php';
    $sql = "SELECT id_position,name FROM positions";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result))
        {
            $array[$row['id_position']] = $row['name'];
        }
    }
    return $array;
}

function getAverageSalary()
{
    include "db_config.php";
    $sql = "SELECT AVG(salary) AS avg_salary,name FROM positions";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            return $row['avg_salary'];
        }
    }
}
?>