<!DOCTYPE html>
<html>
    <head>
        <title>Radio/Checkbox</title>
        <meta charset="utf-8" />
    </head>

    <body>
    <link rel="stylesheet" href="1D-GROUP-14_1D_USERINPUT_FORMS.css">

        <div class="head">
            <h3>Using RadioButtons</h3>
        </div>

        <div class="output2">
        <?php 

            $special = array("!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "+", 
                "=", ":", ";", "<", ">", "?", "/", "\\", "~", "|", "{", "}", "[", "]","=");

            function test_input($data) {
                $data= trim($data);
                $data= stripslashes($data);
                $data= htmlspecialchars($data);
                return $data;
            }
            
            if (empty($_POST['firstname']) OR empty ($_POST['etype'])) {
                $firstnameErr=""; $etypeErr="";

                if(empty($_POST['firstname'])) {
                    $_POST['firstname'] = '';
                    $firstnameErr="Name is required<br>";
                    echo $firstnameErr;
                }
                
                if(empty($_POST['etype'])) {
                    $_POST['etype'] = '';
                    $etypeErr="Please select your employment type <br>";
                    echo $etypeErr;
                }


                
            }
            else {
                
                //Problems
                //2.) number only
                //3.) special characters 
                //4.) whitespaces only
                //doesn't display when no radio button

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
                            $etype = $_POST['etype'];
                            echo "<p> You are <span class='textblue'> $firstname </span> and ";
                            echo "Your employment type is: ";
                            echo "<span class='textblue'> $etype </span></p>"; 
                        }
                            
                        else {
                            $_POST['firstname'] = '';
                            $firstnameErr="Enter a valid name. Special characters are not allowed.<br>";
                            echo $firstnameErr;
                        }
                            
                    }
                }
                    
            }
        ?>
        </div>
        <a href = "1D-GROUP-14_1D_USERINPUT_FORMS_RADIO.html">Go Back</a>
    </body>
</html>
