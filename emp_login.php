<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-16le">
        <title> SMN Tech | Log in</title>
        <link rel="stylesheet" href="css/login_form.css">
    </head>
    <body>
        <div class="login">
            
            <form action="emp_homepage.php" method="POST">
                <fieldset>
                    <legend> Employee log in </legend>
                    <p id="load"> Loading... 
                    <span id="loader">
                         
                        </span>
                    </p>
                        
                    <p> Username </p>
                    <input type="text" name="usrnm" id="uname">
                        <p> Password </p>
                        <input type="password" name="pswd" id="pswd">
                        <br>
                        <br>
                        <input type="submit" name="submit" id="submit_btn"
                               onclick="document.getElementById('load').style.visibility = 'visible'">
                </fieldset>
            </form>
            
        </div>
        
        <div class="idk">
            
            
        
          
        </div>
    </body>
</html>
