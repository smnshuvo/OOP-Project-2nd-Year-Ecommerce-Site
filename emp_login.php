<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-16le">
        <title> SMN Tech | Log in</title>
        <link rel="stylesheet" href="login_form.css">
    </head>
    <body>
        <div class="login">
            
            <form action="" method="POST">
                <fieldset>
                    <legend> Employee log in </legend>
                    <p id="load"> Loading... 
                    <span id="loader">
                         
                        </span>
                    </p>
                        
                    <p> Username </p>
                    <input type="text" name="username" id="uname">
                        <p> Password </p>
                        <input type="password" name="password" id="pswd">
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


