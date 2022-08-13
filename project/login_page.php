<?php
session_start();
include ("conection.php");
include ("function.php");

// $user_data = check_login($con);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($email) && !empty($password))
    { //read from database 
     $query ="select * from logindetails where email = '$email' limit 1" ;
     $result = mysqli_query($con,$query);

     if($result)
     {
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password'] === $password)
            {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("location: index.php");
                die;
            }
        }
     }
     echo "wrong email or password";
    }else{ echo "please enter some valid information";}
}

?>
<HTML>
   <HEAD>
      <TITle>LOGIN PAGE</TITle>
   <style>
       *{
	font-family: sans-serif;
}


.bg{
	
	width: 100%;
	height: 100%;
	position: absolute;
	background-size: COVER;
	

}

.form-box{
	top: 60px;
	width: 450px;
	height: 550px;
	position: relative;
	margin: 0% auto;
	padding: 5px;
	background: rgba(255, 255, 255, 0.93);
	overflow: hidden ;
}
.button-box{
	width: 105px;
	box-shadow: 0 0 20px 9px #ff61241f;
	margin: 30px auto;
	position: relative;
	border-radius: 30px;
	
}
.TOGGLE-BUTTON{
	padding: 10PX 30PX;
	cursor: pointer;
	border: 0;
	background: transparent;
	outline: none ;
	position: relative;
}
#BTN{
	top: 0;
	left: 0;
	position: absolute;
	width: 110PX;
	height: 100%;
	background: linear-gradient(TO RIGHT, #10dbff,#0648ff);
	border-radius: 30PX;
	transition: .2S;
}

.input-group{
	top: 120px;
	position: absolute;
	width: 280px;
	transition: .2s;
}

.input-field{
	width: 100%;
	padding: 10px;
	margin: 5px 10px;
	border-left: 0;
	border-right: 0;
	border-top: 0;
	border-bottom: 1px solid #999;
	outline: none ;
	background: transparent;
}
.submit-btn{
	width: 85%;
	padding: 10px 30px;
	cursor: pointer;
	display: block;
	margin: auto;
	background: linear-gradient(TO RIGHT, #10dbff,#0648ff);
	outline: none;
	border-radius: 30px;
}
.check-box{
	margin: 30px 10px 30px 10px;
}
span{
	color: #777;
	font-size: 12px;
	bottom: 118px;
	position: absolute;
}

   </style>
   </HEAD>
   <body background="https://cdn2.vectorstock.com/i/1000x1000/33/66/cars-auto-repair-doodles-vector-2493366.jpg">
       <div class="bg">
          <div class="form-box">
             
             <div class="button-box">
                <div ID="BTN"></div>
               <button type="button" CLASS="TOGGLE-BUTTON" onclick="login()">LOGIN</button>
            </div>
            <form method="POST" id="login" CLASS="INPUT-GROUP">
               <input type="email" name="email" placeholder="Email Id" required CLASS="INPUT-FIELD">
               <input type="password" name="password" placeholder="Enter Password" required CLASS="INPUT-FIELD">
               <input type="CHECKBOX" CLASS="CHECK-BOX" ><span>Remember Password</span>
               <button type="submit" class="submit-btn">Login</button>
               <a class="create" href="signin_page.php"><p>create account<p></a> 
            </form>
          </div>         
       </div>
   </body>
</HTML>