<?php
session_start();
   include ("conection.php");
   include ("function.php");

   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
       //something was posted
       $user_name = $_POST['user_name'];
       $phone_no = $_POST['phone_no'];
       $email = $_POST['email'];
       $password = $_POST['password'];

       if(!empty($user_name) && !empty($password) && !empty($phone_no) && !empty($email) && !is_numeric($user_name))
       { //save to database 
        $user_id = random_num(20);
        $query = "insert into logindetails (id,user,email,password) values ('$user_id','$user_name','$email','$password')";
        mysqli_query($con,$query);
        header("location: login_page.php");
        die;

       }else{ echo "please enter some valid information";}
   }

?>
<HTML>
   <HEAD>
      <TITle>SIGNIN PAGE</TITle>
   <link REL="stylesheet" type="text/css" href="css/register.css">
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
	top: 20px;
	width: 400px;
	height: 500px;
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
p{
    margin-left:10px;   
}

   </style>
   </HEAD>
   <body background="https://st2.depositphotos.com/4112611/10431/v/950/depositphotos_104313872-stock-illustration-doodle-cars-background.jpg";
	>
       <div class="bg"> 
          <div class="form-box">
             
             <div class="button-box">
                <div ID="BTN"></div>
               <button type="button" CLASS="TOGGLE-BUTTON" onclick="register()">REGISTER</button>
            </div>
            <form method="post" id="register" CLASS="INPUT-GROUP">
               <input type="text" placeholder="Full Name" name="user_name" required CLASS="INPUT-FIELD">
               <input type="text" placeholder="Mobile Number" name="phone_no" required CLASS="INPUT-FIELD" maxlength="10">
               <input type="email" placeholder="Email Id" name="email" required CLASS="INPUT-FIELD">
               <input type="password" placeholder="Enter Password" name="password" required CLASS="INPUT-FIELD">
               <input type="CHECKBOX" CLASS="CHECK-BOX" required><span>I Agreed to the terms and condition</span>
               <button type="submit" class="submit-btn">REGISTER</button>
               <a href="login_page.php"><p>i have account<p></a>
            </form>
          </div>         
       </div>
   </body>
</HTML>