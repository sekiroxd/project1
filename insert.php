<?php
$errorMessage = "";
if (empty($_POST['first_name'])) 
{
    $errorMessage .= "Hiányzó keresztnév!<br>";
}
if (empty($_POST['last_name'])) 
{
    $errorMessage .= "Hiányzó vezetéknév!<br>";
}
if (empty($_POST['email'])) 
{
    $errorMessage .="Hiányzó Email!<br>";
}
if (empty($_POST['birthday'])) 
{
    $errorMessage .="Hiányzó születési dátum!<br>";
}
if (empty($_POST['position'])) 
{
    $errorMessage .= "Hiányzó pozíció!<br>";
}
if ($errorMessage != "") {
    header("Location:index.php?error=1&message=$errorMessage");
    exit();
}


include 'db_config.php';
if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['birthday'])) {
    $sql = 'INSERT INTO workers VALUES("","' . $_POST['position'] . '","' . $_POST['first_name'] . '","' . $_POST['last_name'] . '","' . $_POST['email'] . '","' . $_POST['birthday'] . '","'.date("Y-m-d H:i:s").'")';
    if ($connection->query($sql) === TRUE) {
        echo "Uj adatot fuztunk az adatbazishoz!";
      } else {
        echo "Nem sikerult feltolteni!";
      }
      $sql = "SELECT count(id_worker) as total FROM workers";
      $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
      if (mysqli_num_rows($result) > 0)
      {
          while ($sor = mysqli_fetch_array($result))
          { 
              echo "</br>Table workers has ".$sor['total']." workers data<br>";  
          }
      }

      $sql = "SELECT max(id_worker) as last FROM workers";
      $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
      if (mysqli_num_rows($result) > 0)
      {
          while ($sor = mysqli_fetch_array($result))
          {
              echo "Last insert workers has ".$sor['last'];
          }
      }
      
}
echo "</br><a href=\"index.php\">Back to index page</a>";

?>