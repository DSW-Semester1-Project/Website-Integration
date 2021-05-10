<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "insert";

$conn = mysql_connect($server, $username, $password, $dbname);

if(isset($_POST['signUpButton']))
{
if(!empty($_POST['firstname'])&& !empty($_POST['lastname']) && empty($_POST['DOB'])&& empty($_POST['email'])&& empty($_POST['gender'])&& empty($_POST['password1'])&& empty($_POST['password2']))
{
    $name = $_POST['firstName'];
    $lastN = $_POST['lastname'];
    $dob = $_POST['DOB'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $pass1 = $_POST['password1'];
    $pass2 = $_POST['password2'];
    if($pass1 != $pass2)
    {
        echo "Passwords does not match"
    }

    $query = "insert into details(Name, Surname, Birth date, Email, Gender, Password) values ('$name', '$lastN, '$dob', '$email', $gender', $pass1)";

    $new = mysql_query ($conn, $query);

    if($new)
    {
        echo "Account created successfully";
    }
    else{
        echo "Unsucessfull";
    }
else{
    echo "Fill in all required fields"
}
}
}

?>