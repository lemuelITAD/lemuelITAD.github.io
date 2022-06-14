<!DOCTYPE>
<html>
    <head>
        <title>PHP Basic Concept </title>
        <meta charset="utf-8" />
        <style>
            table{
                border: 2px solid pink;
                margin-left: auto;
                margin-right: auto;
                display: block;
                width: 80%;
                margin-top: 5%
            }
            td{
                width: 20%;
                font-family: Consolas, 'Sans serif';
                color: white;
                font-size: 18px;
                padding-left: 10px;
            }
            h2{
                font-family: Georgia, serif;
                font-size: 36px;
                text-align: Center;
                margin-top: 5%;
                color: white;
            }
            h3{
                font-family: Georgia, serif;
                font-size: 30px;
                text-align: Center;
                color: white;
            }
            body{
                background-color: #0096FF;
            }
            div{
                background-color: #795C34;
                width: 50%;
                margin-left: auto;
                margin-right: auto;
                display: block;
                margin-top: 4%;
                margin-bottom: 4%;
                padding-bottom: 4.5%;
                border-style: ridge;
                border-color: gray;
                border-width: 9px;
                box-shadow: 5px 5px 50px 2px black;
            }
            ul{
                border-left: 5px solid red;
                background-color: #ECECEC;
                margin-left: 70px;
                margin-right: 70px;
                line-height: 30px;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            li{
                font-family: Consolas, 'Sans serif';
                font-size: 18px;
            }
            hr{
                height: 2px;
                width: 100%;
                margin-top: 20px;
                background-color: black;

            }
        </style>

    </head>

    <body>
        <link rel="stylesheet" type="text/css" href="" />
        
        <hr>
        
        <div>
            <h2>Applying Basic Concept</h2>
            <table>
                <tr>
                    <td>
                        <?php 
                            //first row first column
                            echo "Name";
                        ?>
                    </td>
                    <td>
                        <?php 
                            $FirstName = "Rafael Lemuel";
                            $MiddleInitial = " M.";
                            $LastName = " Abacan";
                            echo $FirstName .$MiddleInitial . $LastName; //Rafael Lemuel M. Abacan
                        ?>
                    </td>
                </tr>
                    
                <tr>
                    <td style="border-top: 1px solid white;">
                        <?php 
                            print "Course/Section";
                        ?>
                    </td>
                    <td style="border-top: 1px solid white;">
                        <?php
                            define("COURSE","CIT 1102");
                            define("SECTION","1D");
                            echo "BSIT - " .COURSE ." - " .SECTION;
                        ?>
                    </td>
                </tr>
            </table> 
            

            <h3>Learnings</h3>

            <ul>
                <?php
                /*
                    - Comments (Single and Multiple Lines)
                    - PHP Informations
                    - Variables & Syntax
                    - Best Practices for PHP
                    - Data Types
                */ 
                    $Learnings = array("Comments","PHP Informations","Variables & Syntax", 
                    "Best Practices for PHP", "Data Types");
                ?>
                
                <li>
                    <?php 
                        echo $Learnings[0] //comments
                    ?>
                </li>
                
                <li>
                    <?php 
                        echo $Learnings[1] //Php Informations
                    ?>
                </li>
                
                <li>
                    <?php 
                        echo $Learnings[2] //Variables & Syntax
                    ?>
                </li>

                <li>
                    <?php 
                        echo $Learnings[3] //Best Practices
                    ?>
                </li>

                <li>
                    <?php 
                        echo $Learnings[4] //Data Types
                    ?>
                </li>
            </ul>            
        </div>
        <hr>
    </body>
</html>
