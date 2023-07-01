<!-- /* Name: Mohammed Ibrahim
date: 11/6/2023
The name file is expressive
*/ -->
<?php

function valid_password($psw)
{/* function valid_password for if password is include lowercase & uppercase & alpha-numeric and '+/$#@%^&*<>()' returns true
    time complixity in worse case: o(n)+o(13+len(a))=o(n)
    extra space complixity in worse case: o(4+1+1+1)=o(1)
    */
    $a = array_fill(0, 4, false);
    $res = false;

    for ($i = 0; $i < strlen($psw); $i++) {
        $c = ord($psw[$i]);
        if ((48 <= $c) and  ($c <= 57)  and !$a[0]) {
            $a[0] = true;
        }
        if ((65 <= $c) and ($c <= 90) and !$a[1]) {
            $a[1] = true;
        }
        if ((97 <= $c) and ($c <= 122) and !$a[2]) {
            $a[2] = true;
        }
        if (strpos('+/$#@%^&*<>()', $psw[$i]) !== false and !$a[3]) {
            $a[3] = true;
        }
        if (!in_array(false, $a)) {
            $res = true;
            break;
        }
    } //for
    //if array is not empty false will be valid password return true
    return $res;
}


function contains_digit($str)
{ //function contains_digit time: O(1)
    for ($i = 0; $i < strlen($str); $i++) {
        // if (is_numeric($str[$i]))
        // if (ctype_digit($str[$i]))
        if (ord(9) >= ord($str[$i]) and ord(0) <= ord($str[$i]))
            return true;
    } //for
    return false;
}

function show($nm, $usrnm, $eml, $phn, $psswrd)
{
    // Generate a table to display the data
    echo "<table>";
    echo "<tr><th>Name</th><th>Username</th><th>Email</th><th>Phone</th><th>Password</th></tr>";
    echo "<tr>";
    echo "<td>" . $nm . "</td>";
    echo "<td>" . $usrnm . "</td>";
    echo "<td>" . $eml . "</td>";
    echo "<td>" . $phn . "</td>";
    echo "<td>" . $psswrd . "</td>";
    echo "</tr>";
    echo "</table>";
}