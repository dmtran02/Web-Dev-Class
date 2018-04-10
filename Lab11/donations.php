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
        <title>Donations List</title>
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

            $sql = "SELECT donation_id, donation_amt, donation_date, User_id, dog_num FROM donation ORDER BY donation_id";
            if ($stmt->prepare($sql)) {
                $stmt->execute();
                $stmt->bind_result($donation_id, $donation_amt, $donation_date, $User_id, $dog_num);
                echo "<table>";
                echo "<tr><th>Donation #</th><th>Donation Amount</th><th>Donation Date</th><th>User ID</th><th>Dog #</th></tr>";//
                while ($stmt->fetch()) {
                    echo "<tr>";
                    echo "<td>" . $donation_id . "</td>";
                    echo "<td>" . $donation_amt . "</td>";
                    echo "<td>" . $donation_date . "</td>";
                    echo "<td>" . $User_id . "</td>";
                    echo "<td>" . $dog_num . "</td>";
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
