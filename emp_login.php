<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-16le">
        <title> SMN Tech | Log in</title>
        <link rel="stylesheet" href="css/login_form.css">
        <link rel="stylesheet" href="css/navbar.css">
    </head>
    <body>
        <div class="top_nav">
            <div id='logo'>
                <a href=""> SMN TECH</a>
            </div>            
            <ul>
                <li> <a href=""> Sign in </a> </li>
                 <li> <a href=""> Messages </a> </li>
                  <li> <a href=""> Products </a> </li>
                   <li> <a href=""> Orders </a> </li>
                    <li> <a href=""> Home </a> </li>                    
            </ul>
        </div>
        
        <div class="login">
            
            <form action="" method="POST">
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
                        <input type="submit" name="submit" id="submit_btn" value="SIGN IN"
                               onclick="document.getElementById('load').style.visibility = 'visible'">
                </fieldset>
            </form>
            

            
            
        
          
        </div>
    <?php     
        
        
        /* @param $username is email or username
         * 
         */         
        function userExists($username){
            include ('connect.php');
            $SQL = "SELECT * FROM user_info WHERE username='$username' limit 1";
            // limit 1 will save some execution time
            $result = mysqli_query($cnct, $SQL);
            $row = mysqli_fetch_assoc($result);
            // if there is a row the variable shan't be null
            if ($row != null ){
                return true;                
            } else {
             return false;
            }
        }
        
        function verifyUser($Username, $Password) {
            include ('connect.php');
            include ('session_manager.php');
            
            $QUERY = "SELECT user_id,password from user_info WHERE "
                    . "username='$Username' AND password='$Password' limit 1";
            $result = mysqli_query($cnct, $QUERY);
            $user = mysqli_fetch_assoc($result);
                if ($user != null){
                    //printf("%s , %s\n" ,$user['user_id'], $user['password']);
                    // session_start(); // staring a session
                    start_session();                    
                    $_SESSION['user_id'] = $user['user_id'];
                    $_SESSION['password'] = $user['password'];
                    
                    print_r($_SESSION);
                    //print_r("SESSION ID: " .session_status());
                    
                } else{
                    echo 'WRONG PASSWORD';
                }
            
    
        }
           
        if (isset($_POST['submit'])){
        $Username = filter_input(INPUT_POST, 'usrnm'); 		// inputs username
        $Password = filter_input(INPUT_POST, 'pswd'); 		// and password
            if (userExists($Username)){
                verifyUser($Username, $Password);  
            } else {
                echo 'User doesn\'t exist. Please sign up first';
            }
        }
    ?>
        <div class="login_msg">
            
            
        </div>
    </body>
</html>