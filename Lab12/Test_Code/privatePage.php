<!DOCTYPE html>
<html>

    <body>
        <?php
         include "includeFiles/TrackErrors.php"; // copies 3 lines of code that will cause error message
        // to be shown on the page (not empty white page).
         
        session_start(); // whenever reading from or writing to the session, you have to run this line first.

        $msg = "Welcome - you are allowed to visit this page!";
        
        if (!isset($_SESSION['web_user_id'])) { 
            
            // user is not logged in
            
            //redirect them to the error page and send in a message to that page
            header("Location: errorPage.php?errorMsg=: you are not authorized to see the private page.", true, 303);
            
            die(); // stops the current script 
        } 

        ?>
        
        <?php include "logonLinks.php"; ?>
        
        <h2>Private Page (for Logged On Users Only) </h2>
        
        <br/>
        <?php echo $msg; ?>
        
    </body>
</html>