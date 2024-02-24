<?php 
    require_once ('config.php'); //Importing config file
    session_start(); 
?>
<?php 
    if(isset($_POST['Submit'])) {
        if (($_POST['Username'] == $Username) && ($_POST['Password'] == $Password)) {
            
            $_SESSION['Username'] = $Username; //Store the user to the session.
            $_SESSION['Active'] = true;

            //redirect to index page after login
            header("location:index.php");
            exit; 

        } else {
            echo 'Incorrect Username or Password';
        }
    }
?>
<!DOCTYPE html> 
<html> 
<head> 
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" type="text/css" href="../css/signin.css"> 
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">

    <title>Sign in</title> 
</head> 
<body> 
    <div class="container">
        <form action="" method="post" name="Login_Form" class="form-signin">
            <h2 class="form-signin-heading">Please sign in</h2>
            <label for="inputUsername" >Username</label>
            <input name="Username" type="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
            <label for="inputPassword">Password</label>
            <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button name="Submit" value="Login" class="button" type="submit">Sign in</button>
        </form>
    </div>
</body>
</html>
