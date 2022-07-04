<!DOCTYPE html>
<html> 
    <head>
        <title>Using Checkboxes</title> 
    </head> 
    
    <body> 
    <link rel="stylesheet" href="1D-GROUP-14_1D_USERINPUT_FORMS.css">
            <div class="head">
                <h3>Using Checkboxes</h3> 
            </div>

        <div class="output">
        <?php

            $special = array("!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "+", 
            "=", ":", ";", "<", ">", "?", "/", "\\", "~", "|", "{", "}", "[", "]","=");

            function test_input($data) {
                $data= trim($data);
                $data= stripslashes($data);
                $data= htmlspecialchars($data);
                return $data;
            }

            if (empty($_POST['firstname'])){
                $firstnameErr=""; $etypeErr="";

                if(empty($_POST['firstname'])) {
                    $_POST['firstname'] = '';
                    $firstnameErr="Name is required<br>";
                    echo $firstnameErr;
                }
            }
            else {

                if(is_numeric($_POST['firstname'])) {
                    $_POST['firstname'] = '';
                    $firstnameErr="Enter a valid name. Numbers are not allowed<br>";
                    echo $firstnameErr;
                }
                else {
                    if(preg_match('/^[ ]+$/', $_POST['firstname'])) {

                        $_POST['firstname'] = '';
                        $firstnameErr="Enter a valid name. White space only are not allowed.<br>";
                        echo $firstnameErr;
                    }
                    else{

                        $valid = false;
                        $firstname = test_input($_POST['firstname']);
                        for($i = 0; $i < count($special); $i++) {
                            
                            $storage = $special[$i];
                            if (!function_exists('str_contains')) { //got from php manual
                                function str_contains(string $firstname, string $storage): bool {
                                    return '' === $storage || false !== strpos($firstname, $storage);
                                }
                            }
                            else{
                                if(str_contains($_POST['firstname'], $special[$i])) {
                                $valid = false;
                                break;
                                }
                                else{
                                    $valid = true;
                                }
                            }
                        }

                        if($valid == true) {
                            $firstname = test_input($_POST['firstname']);
                
                            $firstname = $_POST['firstname'];
                        }
                            
                        else {
                            $_POST['firstname'] = '';
                            $firstnameErr="Enter a valid name. Special characters are not allowed.<br>";
                            echo $firstnameErr;
                        }
                            
                    }
                }
                    
            }

            $allFalse = false;
            $radio1 = false;
            $radio2 = false;
            $radio3 = false;
            $count = 0;
            
            if(isset($firstname)) {
                //teset if the checkbox BA has been ticked 
                if (isset($_POST['BA']))
                {
                    $BA = $_POST['BA'];
                    $radio1 = true;
                } 
                else 
                {
                    $BA = "";
                    $radio1 = false;
                }

                //test if the checkbox MA has been ticked 
                if (isset($_POST['MA']))
                {
                    $MA = $_POST['MA'];
                    $radio2 = true; 
                } 
                else 
                {
                    $MA = "";
                    $radio2 = false;
                } 
                ////test if the checkbox Phd has been ticked 
                if (isset($_POST['Phd']))
                {
                    $Phd = $_POST['Phd'];
                    $radio3 = true; 
                } 
                else 
                {
                    $Phd = "";
                    $radio3 = false;
                } 

                if(($radio1 == false) && ($radio2 == false) && ($radio3 == false)) {
                    $allFalse == true;
                    $count = 0;
                }
                else {
                    $allFalse == false;

                    if($radio1 == true) {
                        $count++;
                    } 

                    if($radio2 == true) {
                        $count++;
                    }

                    if($radio3 == true) {
                        $count++;
                    }
                }

                

                if(($allFalse == true) || ($count == 0)){
                    print "<p>You are <span class='textblue'> $firstname</span> and "; 
                    print "you have not earned a degree yet.</p>"; 
                }
                else {
                    print "<p>You are <span class='textblue'> $firstname</span> and "; 
                    
                    if($count > 1) {
                        print "the degrees you've earned are: </p>"; 
                    }
                    else{
                        print "the degree you've earned is: </p>"; 
                    }
                    
                    print "<p><span class='textblue'> $BA </span></p>"; 
                    print "<p><span class='textblue'> $MA </span></p>";
                    print "<p><span class='textblue'> $Phd </span></p>";    
                }
            }
        ?> 
        </div>
        <a href = "1D-GROUP-14_1D_USERINPUT_FORMS_CHECK.html">Go Back</a>
    </body>
</html>