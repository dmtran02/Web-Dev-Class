<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculation Page</title>
    </head>
    <body>
        <?php
        // put your code here
        echo "My Calculation Page";
        ini_set('displaya_startup_errors', 1);
        ini_set('display_errors', 1);
        error_reporting(-1);

        $donationAmt = "";
        $monthAmt = "";
        $dogName = "";

        $msg = "";

        $donationAmtError = "";
        $monthAmtError = "";
        $dogNameError = "";

        if (isset($_GET["donationAmtInput"])) {
            $donationAmt = $_GET["donationAmtInput"];
            $donationAmt = trim($donationAmt);
            if (is_numeric($donationAmt)) {
                $floatDonationAmt = (float) $donationAmt;
            } else {
                $donationAmtError = "Please enter a numeric amount for your donation.";
            }

            $monthAmt = $_GET["monthAmtInput"];
            $monthAmt = trim($monthAmt);
            if (is_numeric($monthAmt)) {
                $floatMonthAmt = (float) $monthAmt;
                if ($floatMonthAmt <= 0) {
                    $monthAmtError = "Please enter a numeric value that is greater than or equal to 1.";
                }
            }

            $dogName = $_GET["dogNameInput"];
            $dogName = trim($dogName);
            if (is_string($dogName)) {
                $stringDogName = (string) $dogName;
                if ($stringDogName = "") {
                    $dogNameError = "Please enter a dog you want this donation to go towards.";
                }
            }

            $allErrors = $donationAmtError . $monthAmtError . $dogNameError;
            if (strlen($allErrors) == 0) {
                $floatTotal = $floatDonationAmt * $floatMonthAmt;
                $msg = "A donation of $" . $donationAmt . " in " . $monthAmt . " months is $" . $floatTotal . " towards " . $dogName . ".";
            }
        }
        ?>
        <h3>Enter your information below:</h3>

        <form action="calculate.php" method="get">
            Donation Amount:
            <br/> <br/>
            $<input type="text" name="donationAmtInput" value="<?php echo $donationAmt ?>"/>
            <span style="color: red"><?php echo $donationAmtError ?></span>
            <br/> <br/>
            Month(s):
            <br/> <br/>
            <input type="text" name="monthAmtInput" value="<?php echo $monthAmt ?>"/>
            <span style="color: red"><?php echo $monthAmtError ?></span>
            <br/> <br/>
            Dog [Liu Bei, Guan Yu, Zhang Fei]:
            <br/> <br/>
            <input type="text" name="dogNameInput" value="<?php echo $dogName ?>"/>
            <span style="color: red"><?php echo $dogNameError ?></span>
            <br/> <br/>
            <input type="submit" value="Calculate"/>
            <br/> <br/>
        </form>
        <?php echo $msg ?>
        <p>This Calculation Page will help calculate your total donation for your entered amount of months for your chosen dog.</p>
    </body>
</html>
