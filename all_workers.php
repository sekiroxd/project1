<?php
   include "db_config.php";
   $sql = "SELECT * FROM workers
           INNER JOIN positions ON workers.id_position = positions.id_position
           ORDER BY workers.lastname ASC";
   $result = mysqli_query($connection, $sql);
   while ($row = mysqli_fetch_assoc($result)) {
      echo "ID: " . $row["id_worker"] . "<br>";
      echo "Név: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
      echo "Email: " . $row["email"] . "<br>";
      echo "Születésnap: " . $row["birthday"] . "<br>";
      echo "Pozíció: " . $row["name"] . "<br>";
      echo "Fizetés: " . $row["salary"] . "<br>";
      echo "<br>";
   }
   echo "<br><a href='index.php'>Back to index</a>";
?>