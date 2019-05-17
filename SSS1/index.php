<!DOCTYPE html>
<html>
	<head>
		<title>Cross Site Request Forgery Protection</title>
        <link rel="stylesheet" type="text/css" href="all_styles.css">   
	</head>
    
	<body>        
        <div id="parent">
            <form action="home.php" method="post" id="form_login">                
                <h1>Login Form</h1>
                <div id="credentials">
                    Username: <input type="text" name="username" placeholder="Enter Username">                    <br> <br>
                    Password: <input type="password" name="password" placeholder="Enter Username">
                    <br> <br>
                	<input type="Submit" value="Login">  
                </div>                    
            </form>
        </div>
	</body> 
</html>

