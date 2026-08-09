<?php
//we have different types of Variable
// first we have string we can write it in double or single string
// 1 : string

$_string_1 = "galaxy";
    $_string_2 = ["kim" , "patrus" , "Alexander"];// we can add multiple value
    echo $_string_1;
        echo "<br> $_string_2[0]";
            echo "<br> $_string_2[1]";
                echo "<br> $_string_2[2]";

    // 2 : integer
            $_integer_1 = 10;
            $_integer_2 = [15 , 20 , 30];
                echo "<br> $_integer_1" ;
                    echo "<br>" . $_integer_1 + $_integer_2[1];

// 3 : float
        $_float_1 = 10.111;
        $_float_2 = [15.2222 , 20.241 , 30.4673];
            echo "<br> $_float_1" ;
                echo "<br>" . $_float_1 + $_float_2[1];

// 4 : Boolean
            $_boolean_1 = 20;
                $_allow_1 = $_boolean_1 > 18 ;
                    echo "<br>";
                        var_dump( $_allow_1);// the outcome will be true

// now we will make for false statement

            $_boolean_f = 15;
                $_allow_f = $_boolean_f > 18 ;
                    echo "<br>";
                        var_dump( $_allow_f);//this will show false statement

                //Now for array
                echo "<br>";
                $_array_1 = ["<br>" , "Galaxy" , "<br>" , "Alexander" ,"<br>" , "Robert" , "<br>" , "A6J2G8P2O"];

        print_r( $_array_1);// we will write print_r for Array . for calling single word than echo or other will work

        //Now we have NULL
                $_null_1 = null;
                echo "<br>";
                var_dump( $_null_1);//var_dump find the words types like which types is this word is
//Code source form galaxy. Open Source
//code password VSTEO622KSA98C2K8
//copyright without developer permission is prohibited
