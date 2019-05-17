<?php
	
	if(isset($_POST['username'],$_POST['password'])){
		$uname = $_POST['username'];
		$pwd = $_POST['password'];
		if($uname == 'madusanka' && $pwd == '123'){
			echo "<h2>";
			echo 'You have Successfully logged in!';
			echo "</h2>";			
		}		
		else{
			echo "<h2>";
			echo 'Invalid Credentials! Try Again!';
			echo "</h2>";
			exit();
		}		
	}

?>

<!DOCTYPE html>
	<html>
		<head>
			<title>Cross Site Request Forgery Protection</title>
            <link rel="stylesheet" type="text/css" href="all_styles.css">
        	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        	<script>
        
				$(document).ready(function(){	
						
					var xhttp;
					xhttp = new XMLHttpRequest();
					
					xhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							document.getElementById("token_to_be_added").setAttribute('value', this.responseText);
						}   
					};
			
					xhttp.open("GET", "csrf_token_generator.php", true);
					xhttp.send(); 
					       
				});			
			</script>        
      	</head>
       
		<body>
			<div id="parent">
        	<form action="updated_post.php" method="post" id="form_login">          
                <br>  <h1>Write Your Post Here...</h1>
                <br> <br>
                
                <div class="credentials">
                        Post: <input type="text" name="postContent">
                </div>
                
                <br>
                <input type="Submit" value="Update Post">
                
                <div id="div1">
                    <input type="hidden" name="csrf_token" value="" id="token_to_be_added"/>
                </div>           
            </form>
            </div>
        </body> 
    </html>
