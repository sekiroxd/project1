<form method="post" action="insert.php">
    <label for="last_name">Vezetéknév:</label><br>
   <input type="text" id="last_name" name="last_name"><br>
   <label for="first_name">Keresztnév:</label><br>
   <input type="text" id="first_name" name="first_name"><br>
   <label for="email">Email:</label><br>
   <input type="text" id="email" name="email"><br>
   <label for="birthday">Születésnap:</label><br>
   <input type="date" id="birthday" name="birthday"><br>
   <label for="position">A vállalatban betöltött pozícó:</label><br>
   <select id="position" name="position">
   <option value="" selected disabled>Valassz!</option>
   <?php
   include 'functions.php';
   
      $positions = getPositions();
        foreach ($positions as $poz_id => $poz_name) {
            echo "<option value=$poz_id>$poz_name</option>";
        }
    ?>
    </select>
   <input type="submit" value="Submit">
   <input type="reset" value="Reset">
</form>
<a href="all_workers.php">Összes munkás</a>
<a href="salary.php">Fizetés</a>
<a href="avg_salary.php">Átlag fizetés</a>
<?php
    if (isset($_GET['error']) && $_GET['error'] == 1 && isset($_GET['message'])) {
        echo '</br>Errors:<br>'.$_GET['message'];
    }
?>