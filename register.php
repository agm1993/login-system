<?php
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

		<link type="image/x-icon" href="images/logo.png" rel="shortcut icon" />

	</head>
	<body>
		
		<br><br><br>
		<div class="row">
			<div class="col-sm-4">
				
			</div>
			<div class="col-sm-4">
				
				<form>
					<center><h2>Register</h2></center>
					<span id="status"></span>
					<div class="input-group input-group-icon">
				        <input type="text" placeholder="Name" id="userName" required />
				        <div class="input-icon"><i class="fa fa-user"></i></div>
				    </div>
					<div class="input-group input-group-icon">
				        <input type="email" placeholder="Email" id="userEmail" required />
				        <div class="input-icon"><i class="fa fa-user"></i></div>
				    </div>
				    <div class="input-group input-group-icon">
				        <input type="password" placeholder="Password" id="userPassword" required />
				        <div class="input-icon"><i class="fa fa-key"></i></div>
				    </div>
				    <div class="input-group">
				        <input type="submit" value="Register" id="userRegister" />
				    </div>
				    <div class="input-group">
				        <a href="index.php">Have an Account? Login Here !</a>
				    </div>
				</form>
			</div>
			<div class="col-sm-4">
				
			</div>
		</div>
		<br><br>
		
		<script type="text/javascript">
            $(document).ready(function(){
              $("#userRegister").click(function(event){
                event.preventDefault();
                var userName = $('#userName').val();
                var userEmail = $('#userEmail').val();
                var userPassword = $('#userPassword').val();
                
                $.ajax({
                    url: "actions/register.php",
                    method: "post",
                    data: {registerUser:1, name:userName, email:userEmail, password:userPassword},

                    beforeSend: function(){
                        $('#status').html('<center><img src="images/loading.gif" width="50px" /></center>');
                    },
                    success: function(data){
                        $("#status").html(data);
                    }

                })
              });
            });

        </script>
	</body>
</html>