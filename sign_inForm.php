<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign In Form</title>
        <link rel="stylesheet" href="signInForm.css">
        <!--
            Author:


        -->
    </head>
    <body>
        <!--header section-->
        <div id="header">
            <span id="logo">logo</span>
            <a href="Home.php">Home</a>
        </div>

        <!--form section-->
        <div id="form-img-section">
            <div id="form">
                <h1>SIGN INTO DASHBOARD</h1>

                <!--sign in form-->
                <form action="" method="POST">
                    <label><b>Email Address</b></label><br>
                    <input type="text" name="email" required><br>
                    <label><b>Password</b></label><br>
                    <input type="password" name="psw" required><br>
                    <!--remember me checkbox functionality: to be researched.
                    <label><input type="checkbox" name="remember" style="margin-bottom:15px"> Remember me</label>--> 
                    <div id="signInButton">
                        <button type="submit" class="signupbtn">Sign In</button>
                    </div>
                </form>
            </div>
            
            <!--img pannel-->
            <div id="imagebox"></div>
        </div>   
    </body>
</html>
