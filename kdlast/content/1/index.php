<?php 

	include ('../../function/database.php');
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'dbkd1');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
	
      $sql = "SELECT id,username,password FROM tblUserSupervisor WHERE username = '$myusername' and password = '$mypassword'";
	echo $sql;
	$result = mysql_query($sql);
	if ($result)
	{
	
     	while ($row = mysql_fetch_array($result)) 
		{
			if ($row['username'] == $myusername)
			{
				if ($row['password'] == $mypassword)
				{
					header("refresh: 0; url='../../kd1/index.php?kodespv=".$row['id']."'");
				}			
			}
		}
	}
	$active = $row['username'];
      $count = mysql_fetch_array($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
     
         $_SESSION['login_user'] = $myusername;
         
         header("location: ../../kd/index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
  	}
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>

<html>  
<body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :<br /> 
			</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :<br /> 
			</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>
