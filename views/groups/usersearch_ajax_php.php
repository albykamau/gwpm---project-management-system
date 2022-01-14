<?php
include("../config.php");

if (isset($_POST['search'])) {
        //Search box value assigning to $Name variable.
        $Name = $_POST['search'];
        //Search query.
        $Query = "SELECT fname FROM students WHERE fname LIKE '%$Name%' LIMIT 5";
        //Query execution
        $ExecQuery = MySQLi_query($mysqli, $Query);
        //Creating unordered list to display result.
        echo '<ul>';

        //Fetching result from database.
        while ($Result = MySQLi_fetch_array($ExecQuery)) {
?>
        <!-- Creating unordered list items.
                Calling javascript function named as "fill" found in "usersearch.js" file.
                By passing fetched result as parameter. -->
        <li onclick='fill("<?php echo $Result["fname"]; ?>")'>
        <a>
        <!-- Assigning searched result in "Search box" in "search.php" file. -->
            <?php echo $Result['fname']; ?>
        </li></a>
        
<?php
}}
?>
</ul>