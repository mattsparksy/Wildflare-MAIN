
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title> 
    <link rel="stylesheet" href="css/style.css"> 
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="icon" href="images/MainOrangeTrans.png">


</head>



<body> 
    <div id="nav-placeholder">

    </div> 

    <section class="signup-form">
        <h2>Sign Up</h2>
        <form action="signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdrepeat" placeholder="Confirm Password"> 
            <button type="submit" name="submit">Sign Up</button> 
        </form>
    </section>
    





</body>
</html> 


<script>
    $(function(){
      $("#nav-placeholder").load("nav.html");
    });
</script>
