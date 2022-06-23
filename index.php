<!DOCTYPE html>
<html>
    <head>
	
        <style>
				
			* {
			  box-sizing: border-box;
			}
			html, body, section, div {
			  height: 100%;
			  padding: 0;
			  margin: 0 auto;
			}

			body { 
			  color: #fff;
			  font-family: sans-serif;
			  font-size: 1.25rem;
			  line-height: 150%;
			  text-align: center;
			  text-shadow: 0 2px 2px #220546;
			}
			
			form {
				width: 50%;
				position: relative;
				top: 50%;
				left: 50%;
				padding: 2rem;
				text-align: center;
				transform: translate(-50%, -50%);
				}
				
			label {
				float: left;
				}

			section {
			  width: 100%;
			}

			article {
			  position: relative;
			  top: 50%;
			  left: 50%;
			  padding: 1rem;
			  text-align: center;
			  transform: translate(-50%, -50%);
			}
			
			.logo {
				border-radius: 80px;
				}
				
			.avatar {
				  object-fit: cover;
				  border-radius:50%;
				  width: 235px;
				  height: 235px;
				  float: top;
				  }

			
			.button {
				  background-color: #04AA6D;
				  color: white;
				  padding: 14px 20px;
				  margin: 8px 0;
				  border: none;
				  border-radius: 80px;
				  cursor: pointer;
				  width: 100%;
				}
				
			.button:hover {
				  opacity: 0.8;
				}
				
			
			input[type=text], input[type=password] {
				  width: 100%;
				  padding: 12px 20px;
				  margin: 8px 0;
				  display: inline-block;
				  border: 1px solid #ccc;
				  border-radius: 80px;
				  box-sizing: border-box;
				}

			/* Pattern styles */
			.left-half {
			  background-image: url("img/backgroundclassroom.jpg");
			  background-position: center;
			  background-repeat: no-repeat;
			  background-size: cover;

			  float: left;
			  width: 60%;
			}
			.right-half {
			  background-color: #311455;
			  float: left;
			  width: 40%;
			}
		</style>
		
    </head>
    <body>
	
	<?php 
	  // Starts the session
	  session_start();

	// Check Login form submitted
	  if(isset($_POST['Submit']))
	  {
	  
		// Define username and associated password array
		  $logins = array('Teacher1' => 'Password123', 'Student1' => 'Password1', 'Student2' => 'Password2');

		// Check and assign submitted user_name and password to new variable
		  $user_name = isset($_POST['user_name']) ? $_POST['user_name'] : '';
		  $password = isset($_POST['password']) ? $_POST['password'] : '';
		  
		// Check user_name and password existence in defined array
		  if (isset($logins[$user_name]) && $logins[$user_name] == $password)
		  {
		  // Success: Set session variables and redirect to Protected page
		  $_SESSION['UserData']['user_name']=$logins[$user_name];
		  header("location:teacher_main.php");
		  exit;
		  }
		  
		  else 
		  {
		  // Unsuccessful attempt: Set error message
		  $msg="<span style='color:red'>Invalid Login Details</span>";
		  }
	  }
	?>	
	
	
	
	
		<section>
		  <div class="left-half">
			<article style='top: 42%'>			
				<img class="logo" src="img/logo.jpg" alt="Logo">
			  <p>by Codebusters</p>
			</article>
		  </div>
		  
		  
		  
		  
		  <div class="right-half">			
			
				<form action="" method="POST" name="Login_Form">
				  <div>
					<img src="img/avatar.png" alt="Avatar" class="avatar">
				  </div>

				  <div>
					<label for="user_name"><b>Username</b></label>
					<input type="text" placeholder="Enter Username" name="user_name" required>

					<label for="password"><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="password" required>
						
					<input name="Submit" type="submit" value="Login" class="button">

				  <?php if(isset($msg)){?>
				  <tr>
				  <td colspan="3" align="center" valign="bottom"><?php echo $msg;?></td>
				  </tr>
				  <?php } ?>

				  </div>
				</form>
			
		  </div>
		</section>
		
    </body>
</html>