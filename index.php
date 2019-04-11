<html>
        <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
                    crossorigin="anonymous">
                <title>login_Page</title>
                <style>
                p{
                    border: 10px
                }
                img{
                    size: 100sp
                }
                    </style>
            </head>
            
    <body>
            <div class="jumbotron text-center">
                    <h1>Login page</h1>
                </div>
        <form style="text-align:center;" id = "login" name = "login" action = "loginprocess.php" 
        method = "post">
        <label class="label">Username:</label> 
        <input type="text" name="newuser" id="user"/><br>
        <label class="label">Password:</label>
        <input type="password" name="newpwd" id="pwd"/><br>
        <input type="submit" name="loggedin" value="Log In"/>
        <p style="text-align:center; color:cadetblue">
                <i>  login name: admin; password:123456;</i>
        </p>

        </form>
        <form style="text-align:center;" id = "login" name = "login" action = "save_user.php" 
        method = "post">
        <h2>Create Account</h2>
        <label class="label">Username:</label> 
        <input type="text" name="newuser" id="user"/><br>
        <label class="label">Password:</label>
        <input type="password" name="newpwd" id="pwd"/><br>
        <input type="submit" name="loggedin" value="Create Account"/>
        <p style="text-align:center; color:cadetblue">
                <i>  login name: admin; password:123456; </i>
        </p>

        </form>
    </body>
</html>