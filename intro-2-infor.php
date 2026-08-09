<?php
// now we will study a function or code it only show datatype
        $_get_type = "galaxy";
           echo gettype( $_get_type);

//it checks if the variable exists in the code or not
//if exist it will show true or if not it will show false
            $_element_exist = "galaxy";
               echo "<br>";
                   var_dump(true);//it will show true because the element exist

//now if you want to delete a variable
// we can delete variable by this code
        $_delete_element ="galaxy";
            echo "<br>";
                unset($_delete_element); // it  will delete  element

        //PHP has 3 Main Variable Scopes
        //know variable scope " the area of program where code or program can be access or used"
        // 1 : Local Scope
        // 2 : Global Scope
        // 3 : Static Scope

//now local scope : A local variable is created inside function.
            function Galaxy(): void
            {
                $_local_1 = "galaxy";
                echo "<br>";
                echo $_local_1;
            }
                //but if I put echo $_local_1; here it will show error.
                Galaxy();//The function end here.
// we can also another Example
          function Galaxy_1(): void
          {
                  $_local_2 = 30;
                    $_local_3 = 70;
                      $_local_sum  = $_local_3 + $_local_2;
                      echo "<br>";
                   echo $_local_sum;
          }
          //now we need to find the function
           Galaxy_1();


  // Now we have Global Scope
      //A global Scope variable store all variable in one array
        // it is Create everywhere outside the Function.
            $_global_scope_1 = 25;
              $_global_scope_2 = 25;
                $_global_scope_3 = $_global_scope_1 + $_global_scope_2;
        function add_global_scope(): void
        {
            global $_global_scope_3;
            echo "<br>";
            echo $_global_scope_3;

        }
       add_global_scope();//it Ends the function


        //now if we have two or more than two numbers or variables in global scope
       $global_scope_f1 = 50; // first variable
       $global_scope_f2 = 50; // second variable
       function add_global_scope_2(): void
       {
           echo "<br>";
           echo $GLOBALS["global_scope_f1"] + $GLOBALS["global_scope_f2"]; // now it will add these numbers
       }
       add_global_scope_2();

       //now we have Static Scope
       // This one is more interesting but fucking difficult
       // it used inside the function
      function Static_Scope(): void
      {
          echo "<br>";
          static $scope_1 = 0; //we create a variable value is zero
          $scope_1++;   //this means add 0 + 1 So the result will be " 1 "
          echo $scope_1 ;
      }
      Static_Scope();
      Static_Scope();
      Static_Scope();//if I write 1 more time than it will show 4 times...

//Code source form galaxy. Open Source
//code password B1I83A02M63X03
//copyright without developer permission is prohibited
