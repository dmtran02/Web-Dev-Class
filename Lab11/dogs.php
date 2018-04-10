<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link id="tableTemplate" rel="stylesheet" type="text/css" href="tableTemplate.css">
        <title>The Dog Page</title>
    </head>
    <body>
        <?php
        ini_set('display_startup_errors', 1);
        ini_set('display_errors', 1);
        error_reporting(-1);

        $conn = mysqli_connect('cis-linux2.temple.edu', 'tuf49524', 'xijaixoy', 'FA17_1052_tuf49524');
        if ($conn) {
            echo 'Connected successfully...' . "<br/>";
            echo "<br/>";

            $stmt = mysqli_stmt_init($conn);

            $sql = "SELECT dog_num, dog_id, dog_desc, adopt_fee, img_name FROM dog_list ORDER BY dog_num";
            if ($stmt->prepare($sql)) {
                $stmt->execute();
                $stmt->bind_result($dog_num, $dog_id, $dog_desc, $adopt_fee, $img_name);
                echo "<table>";
                echo "<tr><th>Dog #</th><th>Dog Name</th><th>Description</th><th>Name</th><th>Image</th></tr>";//
                while ($stmt->fetch()) {
                    echo "<tr>";
                    echo "<td>" . $dog_num . "</td>";
                    echo "<td>" . $dog_id . "</td>";
                    echo "<td>" . $dog_desc . "</td>";
                    echo "<td>" . "$".$adopt_fee . "</td>";
                    echo "<td>";
                    echo '<img src="Pics/' . $img_name . '" alt="img" ,width=100px, height=100px />';
                    echo "</td>";
                    echo "</tr>";
                }
                $stmt->close();
            } else {
                echo "Could not prepare the statement";
            }
        } else {
            echo 'Connection failed and could not open database';
        }
        $conn->close();
        ?>
    </body>
</html>
