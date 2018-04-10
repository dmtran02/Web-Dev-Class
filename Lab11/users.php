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
        <title>User List</title>
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

            $sql = "SELECT user_id, email_address, pwd, first_name, last_name, address, city, state, zip FROM User ORDER BY user_id";
            if ($stmt->prepare($sql)) {
                $stmt->execute();
                $stmt->bind_result($user_id, $email_address, $pwd, $first_name, $last_name, $address, $city, $state, $zip);
                echo "<table>";
                echo "<tr><th>User ID</th><th>User Email</th><th>Password</th><th>Name</th><th>Address</th></tr>";//
                while ($stmt->fetch()) {
                    //echo $user_id . " - " . $email_address . " - " . $last_name . " - " . $first_name . " - " . $address . " - " . $city . " - " . $state . " - " . $zip . "<br/>";
                    echo "<tr>";
                    echo "<td>" . $user_id . "</td>";
                    echo "<td>" . $email_address . "</td>";
                    echo "<td>" . $pwd . "</td>";
                    echo "<td>" . $last_name . ", " . $first_name . "</td>";
                    echo "<td>" . $address . "<br/>" . $city . "<br/>" . $state . "<br/>" . $zip . "</td>";
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
