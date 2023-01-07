<?php
   include "db_config.php";

   $sql = "SELECT Name,salary FROM positions ORDER BY salary DESC";

   $result = mysqli_query($connection, $sql);
   while ($row = mysqli_fetch_assoc($result)) {
      echo $row["Name"] . " - " . $row["salary"] . "<br>";
   }

   echo "<br><a href='index.php'>Back to index</a>";
?>