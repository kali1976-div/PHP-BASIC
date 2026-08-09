<?php
//Now we will study operators
/*
 1 : ==  only know if value is true
 2 : ===  when value and type both are true
 3 : != Or  <>  not equal
 4 : !== when the value and type both are wrong
*/
      $galaxy_10395 = 20;
        $galaxy_10396 = 20;
          var_dump( $galaxy_10395 === $galaxy_10396 );//it will show true because the value is same
          echo "<br>";

      $galaxy_1977 = 10;
         $galaxy_1978 = "10";
            var_dump( $galaxy_1977 === $galaxy_1978 ); // it will show  false because the type is different
            echo "<br>";

      $galaxy_1979 = 10;
         $galaxy_1980 = 20;
           var_dump( $galaxy_1979 != $galaxy_1980 ); // != only for value
           echo "<br>";

             // OR we can also write it in another way.
      $galaxy_1981 = 20 ;
         $galaxy_1982 = 20;
           var_dump( $galaxy_1981 !== $galaxy_1982 );// !== is for value and type both
             echo "<br>";


      //now we have PHP increment and decrement operators
      $galaxy_8810 = 10;
         echo ++$galaxy_8810;
           echo "<br>";

             $galaxy_8811 = 10;
                   echo $galaxy_8811++;// in this stage it is 11, but it will show 10 but if we write again echo it will show 11 like show in the below
                      //echo $galaxy_8811;
                        echo "<br>";
                    $galaxy_909119 = 10;
                    echo --$galaxy_909119;
                  echo "<br>";
                 $galaxy_909120 = 10;
             echo $galaxy_909120--; //in this step the value is same but in another step the value will be decrease
          echo "<br>";
        echo $galaxy_909120;

//Code source form galaxy. Open Source
//code password K83DNAS7324NSA73AL93
//copyright without developer permission is prohibited
