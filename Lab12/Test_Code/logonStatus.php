<!DOCTYPE html>
<html>

    <body>
        <?php
         include "includeFiles/TrackErrors.php"; // copies 3 lines of code that will cause error message
        // to be shown on the page (not empty white page).
         
        session_start(); // whenever reading from or writing to the session, you have to run this line first.

        $msg = "web user id is ";
        if (isset($_SESSION['web_user_id'])) {
            $msg .= $_SESSION['web_user_id'];
        } else {
            $msg .= "nothing";
        }
        
        $msg .="<br/> user email is ";       
        if (isset($_SESSION['user_email'])) {
            $msg .= $_SESSION['user_email'];
        } else {
            $msg .= "nothing";
        }
        
        $msg .="<br/> user role is ";
        if (isset($_SESSION['user_role_id'])) {
            $msg .= $_SESSION['user_role_id'];
        } else {
            $msg .= "nothing";
        }
        $msg .= "<br/>";

        ?>
        
        <?php include "logonLinks.php"; ?>
        
        <h2>Log On Status - checking the session</h2>

        <?php echo $msg; ?>
        
    </body>
</html>