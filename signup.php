<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Screen</title>
    <link rel="stylesheet" href="signup.css">
    <!--
        Author:
        Mopholosi Monyollo
        Student number 220099000
    -->
</head>
<body>
    <!--header section-->
    <div id="header">
        <span id="logo">logo</span>
        <a href="Home.php">Home</a>
    </div>

    <div id="form-img-section">
        <!--Form section-->
        <div id="form">
            <div id="heading"><h1><b>Create An Account</b></h1></div>

            <!--form elements-->
            <form action="" method="POST">
                <label><b>Name: </b></label><br>
                <input type="text" name="firstName" required><br>
                <label><b>Surname: </b></label><br>
                <input type="text" name="lastName" required><br>
                <label><b>Date of Birth: </b></label><br>
                <input type="date" name="DOB" required><br>
                <label><b>Email: </b></label><br>
                <input type="email" name='email' required><br>
                <label><b>Gender: </b></label><br>
                <select name="gender" id="" required>
                    <option></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select><br>
               <div id="password-section">
                    <div>
                        <label><b>Create Password: </b></label><br>
                        <input type="password" name="password1" required><br>
                    </div>
                    <div>
                        <label><b>Repeat Password: </b></label><br>
                    <input type="password" name="password2" required><br>
                    </div>
               </div>
                <label><b>Goal: (optional)</b></label><br>
                <textarea name="commentSection" id="" cols="55" rows="7"></textarea><br>
                <input type="submit" name="signUpButton" id="">
            </form>
        </div>

        <!--img pannel-->
        <div id="imagebox"></div>
    </div>
</body>
</html>