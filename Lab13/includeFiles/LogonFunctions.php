<?php

    function checkLogon($con, $checkingUserEmail, $checkingUserPwd) {

        $returnValue = "ready to check logon credentials";

        try {
            $sql = "SELECT email_address, first_name FROM User WHERE email_address = ? and pwd = ?";

            if (!$con->connect_error) {

                $stmt = $con->stmt_init();
                if ($stmt->prepare($sql)) {

                    // "ss" means the first parameter is string (s) and so is the second. 
                    // other codes are i for integer, d for decimal. So, for example, 
                    // if the first parameter was integer, the second and third string, 
                    // you would put "iss" instead of "ss". 
                    $stmt->bind_param("ss", $checkingUserEmail, $checkingUserPwd);
                    $stmt->execute();
                    $stmt->bind_result($email_address, $first_name);

                    if ($stmt->fetch()) { // keep running the code in this block for each row in the result set
                        // 
                        // put user credentials into the session object on the web server
                        session_start();
                        $_SESSION['email_address'] = $checkingUserEmail;
                        $_SESSION['first_name'] = $first_name;

                        $returnValue = "Welcome " . $checkingUserEmail . ". Your User ID is " .
                                $email_address . " and your role is " . $first_name . ".";
                    } else {
                        $returnValue = "Username " . $checkingUserEmail . " and Password " .
                                $checkingUserPwd . " were not found in database";
                    }
                } else {
                    $returnValue = "could not prepare statement";
                }
            } else {
                $returnValue = "could not connect";
            }
        } catch (Exception $e) {
            $returnValue = $e->getMessage();
        }
        return $returnValue;
    }


    function getUserID() {
        if (isset($_SESSION['email_address'])) {
            return $_SESSION['email_address'];
        } else {
            return "Not logged in";
        }
    }

    function getUserEmail() {
        if (isset($_SESSION['email_address'])) {
            return $_SESSION['email_address'];
        } else {
            return "Not logged in";
        }
    }

    function getUserFirstName() {
        if (isset($_SESSION['first_name'])) {
            return $_SESSION['first_name'];
        } else {
            return "Not logged in";
        }
    }

?>