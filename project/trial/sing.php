
    <link href="signupstyle.css" rel="stylesheet">
    <link href="connect.php" rel="php">
<div id="login-box">
    <form action="connect.php" method="post">
    <div class="left">
      <h1>Sign up</h1>
     
      <input type="text" name="user" placeholder="Username" />
      <input type="text" name="email" placeholder="E-mail" />
      <input type="password" name="password" placeholder="Password" />
      <input type="password" name="password2" placeholder="Retype password" />
      <input type="submit" name="signup_submit" value="Sign me up"  />
    </div>
    
    <div class="right">
      <span class="loginwith">Sign in with<br />social network</span>
      
      <button class="social-signin facebook">Log in with facebook</button>
      <button class="social-signin twitter">Log in with Twitter</button>
      <button class="social-signin google">Log in with Google+</button>
    </div>
    <div class="or">OR</div>
   </form> 
  </div>
  <?php
$user = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
//db connection
$connection = new mysqli('localhost', 'root', '', 'login_details');
if ($connection->connect_error) {
    die('connection failed : ' . $connection->connect_error);
} else {
    $stmt=$connection->prepare('INSERT into login_details(user, email, passowrd, passowrd2') VALUES(''));
    $stmt->bind_param("ssss", $user, $email, $password, $password2);
    $stmt->execute();
    $stmt->store_result($user, $email, $password, $password2);
    echo " Successfully Signed In";
    $stmt->close();
    $connection->close();
}
?>