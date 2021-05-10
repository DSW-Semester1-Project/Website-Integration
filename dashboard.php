<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <link rel="stylesheet" href="dashboard.css">
        <!--
            Authors: 
            Mopholosi Monyollo
            Stuent Number - 220099000


        -->
    </head>
    <body>
        <!--header section-->
        <div id="header">
            <span id="logo">logo</span>
            <!--header buttons-->
            <div id="header-button-box">
                <a href="settingsPage.php">Settings</a>
                <a href="Home.php">Log Out</a>
            </div>
        </div>

        <div id="body">
            <div id="image-pannel">
                picture
            </div>
            <!--left pannel-->
            <div id="left-pannel">
                <!--journal entry-->
                <div id="top-left-pannel">
                    <form action="" method="POST">
                        <label>Goal: (optional)</label><br>
                        <textarea name="commentSection" id="" cols="60" rows="30"></textarea><br>
                        <input type="file" name="insertImage" id="image-upload">
                        <button type="submit">Post</button>
                    </form>
                </div>

                <!--latest journal display-->
                <div id="bottom-left-pannel">
                    <h1><b>Your Latest Journal Entry</b></h1>
                    <div id="latest-entry-journal">latest Entry</div>
                </div>
            </div>
            
            <!--right pannel-->
            <div id="right-pannel">
                <h1>progress journal</h1>
            </div>
        </div>
    </body>
</html>