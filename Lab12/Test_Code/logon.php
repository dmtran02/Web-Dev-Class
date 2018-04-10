<!DOCTYPE html>
<html>

    <body>
        <?php
        include "includeFiles/TrackErrors.php"; // copies 3 lines of code that will cause error message
        // to be shown on the page (not empty white page).

        include "includeFiles/LogonFunctions.php"; // copies 3 lines of code that will cause error message

        $msg = ""; // we will write this msg on the page

        $strUserEmail = "";
        $strUserPwd = "";

        if (isset($_GET['userEmail'])) {

            $strUserEmail = $_GET['userEmail'];
            $strUserPwd = $_GET['userPwd'];

            $con = mysqli_connect('cis-linux2.temple.edu', 'tuf49524', 'xijaixoy', 'FA17_1052_tuf49524');
            if ($con) {
                // call a function that returns the HTML code that is the whole HTML table. 
                $msg = checkLogon($con, $strUserEmail, $strUserPwd);
            } else {
                // call a function that returns the database connection error message.
                $msg = $con->connect_error;
            }
        }
        ?>

        <?php include "logonLinks.php"; ?>

        <h2>Log On</h2>
        <form action="logon.php" method="get">
            User Email: <input type="text" name="userEmail" value="<?php echo $strUserEmail; ?>"/>
            <br/><br/>
            Password: <input type="password" name="userPwd" value="<?php echo $strUserPwd; ?>"/>
            <br/><br/>
            <input type="submit" value="Log On"/>
        </form>
        <br/>

        <?php echo $msg; ?>

    </body>
</html>