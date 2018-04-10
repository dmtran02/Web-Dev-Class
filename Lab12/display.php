<!DOCTYPE html>

<html>
    <head>
        <style>
            table {
                background-color:lightsteelblue;
            }
            td,th {
                padding-left: 4px;
                padding-right: 4px;
            }
            th {
                background-color:#CCCCCC;
            }
            td {
                background-color:#EEEEEE;
            }
        </style>
    </head>

    <body>

        <?php
        include "includeFiles/TrackErrors.php"; // copies 3 lines of code that will cause error message
        // to be shown on the page (not empty white page). 

        include "includeFiles/FormatFunctions.php";

        include "logonLinks.php";

        $msg = "";

        $con = mysqli_connect('cis-linux2.temple.edu', 'tuf49524', 'xijaixoy', 'FA17_1052_tuf49524');
        if ($con) {
            echo "<h2>User List</h2>";
            echo "<table><tr><th>User ID</th><th>User Email</th><th>Password</th><th>First Name</th><th>Last Name</th><th>Address</th><th>City</th><th>State</th><th>Zip Code</th></tr>\n";

            try {
                // Get the result set (think grid of data) and put it into $result
                $sql = "SELECT user_id, email_address, pwd, first_name, last_name, address, city, state, zip FROM User ORDER BY user_id";

                if ($con) {
                    $stmt = $con->stmt_init();
                    if ($stmt->prepare($sql)) {

                        $stmt->execute();
                        $stmt->bind_result($user_id, $email_address, $pwd, $first_name, $last_name, $address, $city, $state, $zip);

                        while ($stmt->fetch()) { // keep running the code in this block for each row in the result set
                            echo "<tr>"; // start a HTML row
                            // print the columns of the result set - each surrounded by <td> .. </td>         
                            echo "<td>" . $user_id . "</td>";
                            echo "<td>" . $email_address . "</td>";
                            echo "<td>" . $pwd . "</td>";
                            echo "<td>" . $first_name . "</td>";
                            echo "<td>" . $last_name . "</td>";
                            echo "<td>" . $address . "</td>";
                            echo "<td>" . $city . "</td>";
                            echo "<td>" . $state . "</td>";
                            echo "<td>" . $zip . "</td>";

                            echo "</tr>"; // finish off the HTML row

                            echo "\n"; // this doesnt change what you see on the page, but puts a newline in View Source
                            //$i = $i + 1;  // add one to the row counter variable
                        }
                        echo "</table>"; // finish off the HTML table tag
                    } else {
                        echo "could not prepare statement";
                    }
                } else {
                    echo "could not connect: " + $con->connect_error;
                }
            } catch (Exception $e) {
                echo "<br/>Error in view.webUserList: " + $e->getMessage();
            }
        } else {
            // call a function that returns the database connection error message.
            echo "Connect Error: " . $con->connect_error;
        }

        // VERY IMPORTANT -- dont forget to close the connection or you will bring MySql down
        // -- for yourself and for all other students.
        $con->close();
        ?>

    </body>
</html>