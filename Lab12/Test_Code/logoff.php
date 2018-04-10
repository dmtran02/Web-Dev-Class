<!DOCTYPE html>
<html>

    <body>
        <?php
        include "includeFiles/TrackErrors.php"; // copies 3 lines of code that will cause error message
        // to be shown on the page (not empty white page).

        session_start(); // whenever reading from or writing to the session, you have to run this line first.
        session_unset(); // this is what clears the users logon credentials from the session.

        $msg = "You are now logged off."; // we will write this msg on the page
        ?>

        <?php include "logonLinks.php"; ?> 

        <h2>Log Off</h2>

        <?php echo $msg; ?>

    </body>
</html>