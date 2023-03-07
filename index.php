<?php
// The print() and echo() statements print string data

    // print()
    print "<h1>print() statement</h1>";
        print "Apple";
    print "<br/>";
        // (or)
        print("Apple");

    print "<br/>";

    // echo()
    print "<h1>echo() statement</h1>";

        echo "Apple";
    print "<br/>";
        // (or)
        echo ("Apple");

    print "<br/>";

        // Output AppleOrangeGrapes
        echo "Apple", "Orange", "Grapes";
        // not a valid statement
        // echo ("Apple","Orange","Grapes");


// The printf() is used to print the formatted output by using the values passed as the parameter of this function

    print "<h1>printf() statement</h1>";
    printf('We are expected to score above %d%% for distinction', 85);
    // Output: We are expected to score above 85%
    // for distinction


// The sprintf() is similar to the printf() function except that it can return the formatted string instead of printing it to the browser. Then we can store it into a variable.


// The print_r() is used to print compound datatype-like PHP arrays or objects

    print "<h1>print_r() statement</h1>";
    print_r($_FILES); // returns array
    print_r(false); // returns empty string


// The var_dump() also prints array data in structured manner. It gives additional data, like, the data type, the length, values and more

    print "<h1>var_dump() statement</h1>";
    var_dump(false); // prints bool(false)
    print "<br/>";
    var_dump($_FILES); // prints array
?>