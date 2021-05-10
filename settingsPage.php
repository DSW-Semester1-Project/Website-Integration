<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Settings</title>
        <link rel="stylesheet" href="settingsPage.css">
        <!--
            Authors: 
            Mopholosi Monyollo
            Student Number - 220099000
        -->
    </head>
    <body>
        <!--header section-->
        <div id="header">
            <span id="logo">logo</span>
            <!--header buttons-->
            <div id="header-button-box">
                <a href="dashboard.php">Back</a>
            </div>
        </div>
        
        <!--email section-->
        <div id="form-section">
            <div id="email-section">
                <div class="heading">Change your email</div>
                <div class="form">
                    <form action="">
                        <label>Enter your Email: </label><br>
                        <input type="email" required><br>
                        <label>Repeat Email: </label><br>
                        <input type="email" required><br>
                        <button type="submit">Change</button>
                    </form>
                </div>
            </div>

            <!--Password section-->
            <div id="password-section">
                <div class="heading">Change your password</div>
                <div class="form">
                    <form action="">
                        <label>Enter Old password: </label><br>
                        <input type="password" required><br>
                        <label>Enter New Password: </label><br>
                        <input type="password" required><br>
                        <label>Verify Password</label><br>
                        <input type="password" required><br>
                        <button type="submit">Change</button>
                    </form>
                </div>
            </div>

            <!--delete account-->
            <div id="delete-acc-section">
                <div class="heading">Delete your Account</div>
                <div class="form">
                    <form action="">
                        <button type="submit">Delete</button>
                    </form>
                </div>
                
            </div>
        </div>
    </body>
</html>