<?php
$email ='';
$password = '';
if(isset($_POST['submit'])){
    echo 'Submitted';
    $email = $_POST['email'];
    $password = $_POST['password'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - NASIMS</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
nav{
    background:green;
    color:white;
    padding:10px;
    display:flex;
    align-items:center;
    justify-content:space-between;
}
ul li{
    display:inline-block;
}
ul li a{
    color:white;
    text-decoration:none;
    padding:0px 10px;
    cursor: pointer;
}
.container{
    width:100%;
    max-width:600px;
    margin:10px auto;
    border:1px solid gray;
}
form{
    display:flex; 
    flex-direction:column;
    align-items:center;
    justify-content:center;
    padding:20px 40px;
}
input{
    width:100%;
    padding:12px 14px;
    border-radius:20px;
    outline: none;

}
button{
    outline:none;
    background:green;
    color:white;
    border-radius:10px;
    padding:10px;
    width: 50%;
    cursor: pointer;
}
    </style>
<body>
    <nav>
    <div>NASIMS</div>
    <ul>
     <li>
        <a href="index.php">Home</a>
    </li>
    <li>
        <a href="login.php">Login</a>
    </li>
    <li>
        <a href="/register.php">Register</a>
    </li>
    </ul>
</nav>
    <h1>Login</h1>
    <?php echo $email.'= '.$password ?>
    <hr>
    <section class="container">
    <form method="POST" action="login.php">
    <input type="email" name="email" placeholder="Enter your email"><br>
    <input type="password" name="password" placeholder="Enter your password"><br>
    <button type="submit" name="submit">Login</button>
    </form>
</section>
</body>
</html>