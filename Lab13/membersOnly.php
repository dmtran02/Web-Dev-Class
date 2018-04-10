<!DOCTYPE html>
<html>

    <body>
        <?php
         include "includeFiles/TrackErrors.php";
         
        session_start();

        $msg = "How is your day going so far?";
        
        if (!isset($_SESSION['email_address'])) { 
            header("Location: error.php?errorMsg=: You are not a member of the fan club!", true, 303);
            die();
        } 

        ?>
        
        <?php include "logonLinks.php"; ?>
        
        <h2>Welcome to the Shiba Inu Fan Club Page!</h2>
        
        <br/>
        <?php echo $msg; ?>
        
    </body>
</html>