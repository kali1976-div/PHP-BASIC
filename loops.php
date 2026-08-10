<?php
 // we will learn loops in PHP
 // loops when we want to repeat something many times without write it again and again
 /*
  1 : for loop
  2 : while loop
  3 : do while loop
  4 : foreach loop
  */

   //for loop: in for loop wwe need to know the starting and ending point
         for ($galaxy_337564 = 1; $galaxy_337564 <= 3; $galaxy_337564++) {
           echo "this is galaxy $galaxy_337564 X <br>";
               }
           for ($galaxy_77328 = 1; $galaxy_77328 <= 3 ; $galaxy_77328++) {
                 echo " $galaxy_77328 student <br>";
               }
                  //while loop : run code as long as the condition become true.
              $galaxy_536790 = 1;
                   while ($galaxy_536790 <= 3){//this is condition if it became true it will return and code will stop.
                        echo $galaxy_536790 . " : I am boy. <br>";
                            $galaxy_536790++;//this increase value
                              }

                            // Do while loop : its run code first than it check condition is true or false
         $galaxy_49539 = 1 ;
                   do{
                       echo $galaxy_49539 . " : I am girl. <br> ";// its run code first than it check condition
                       $galaxy_49539++;
                   }while ($galaxy_49539 <= 3);//condition statement
            // foreach loop is mainly used for array
           /*foreach ($array as $value) {
                    code
                        }   */
                $galaxy_443641 = ["galaxy" , "robert" , "Muhammmad" , "alex" , "david"];
              foreach ($galaxy_443641 as $value){

                  echo $value . "<br>";
              }
              //Or you can also write its index number with it.
               foreach ($galaxy_443641 as $index => $value){
                   echo $index . ":" . $value . "<br>"; // or if you want to start index with 1. u can replace $index with ($index + 1)
               }
                  //if you want to show first 2 or more names.
                      foreach ($galaxy_443641 as $index => $value){
                          echo ($index + 1) . ":" . $value . "<br>";
                             if ($index === 1){
                                 break;
                             }

                      }
                      //or if you want last 2 or more name we can write it like
                        $galaxy_65765 = ["khan", "alexa", "harry" , "alison"];
                        foreach ($galaxy_65765 as $index => $value){
                            echo $index . ":" . $value . "<br>";
                              if ($index >= 3){
                                  break;
                              }
                        }
                         // if you want to slice a specific
                          $galaxy_65765_slice = array_slice($galaxy_65765, -2);
                          foreach ($galaxy_65765_slice as $value){
                              echo $value . "<br>";
                          }
//Code source form galaxy. Open Source
//code password IBA5306CNA2X51Q11
//copyright without developer permission is prohibited
  ?>          
