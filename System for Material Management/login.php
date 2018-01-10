 <?php
 
 echo "
 <!DOCTYPE html>
<html>
<head>
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
<script src =\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
<link rel=\"stylesheet\" href=\"styles.css\">
</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand\" href=\"#\">SM2 Industries</a>
  </nav>
<div class=\"screen\">
<div class=\"container\">
    	<div class=\"row\">
    	<div class = \"col-md-3\"></div>
			<div class=\"col-md-6\">
				<div class=\"panel-login\">
					<div class=\"panel-heading\">
						<div class=\"row\">
							<div class=\"col-md-6\">
								<a href=\"#\" class=\"active\" id=\"login-form-link\">Login</a>
							</div>
							<div class=\"col-md-6\">
								<a href=\"#\" id=\"register-form-link\">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class=\"panel-body\">
						<div class=\"row\">
							<div class=\"col-lg-12\" style=\"
    								margin-top: 14px;\">
									<form id=\"login-form\"  action=\"http://localhost/adbmsscripts/userlogin.php\" method=\"post\" role=\"form\" style=\"display: block;\">
									<div class=\"form-group\">
										<input type=\"text\" name=\"uname\" id=\"uname\" tabindex=\"1\" class=\"form-control\" placeholder=\"Username\" value=\"\">
									</div>
									<div class=\"form-group\">
										<input type=\"password\" name=\"loginpsw\" id=\"password\" tabindex=\"2\" class=\"form-control\" placeholder=\"Password\">
									</div>	
									<div class=\"form-group\">
										<div class=\"row\">
											<div class=\"col-sm-6 col-sm-offset-3\">
												<input type=\"submit\" name=\"login-submit\" id=\"login-submit\" tabindex=\"4\" class=\"form-control btn btn-login\" value=\"Log In\">
											</div>
										</div>
									</div>
									<div class=\"form-group\">
										<div class=\"row\">
											<div class=\"col-lg-12\">
												<div class=\"text-center\">
													<a tabindex=\"5\" class=\"forgot-password\">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id=\"register-form\" role=\"form\"  method=\"post\" action=\"http://localhost/adbmsscripts/newuser.php\" style=\"display: none;\">
									<div class=\"form-group\">
										<input type=\"text\" name=\"fname\" id=\"username\" tabindex=\"1\" class=\"form-control\" placeholder=\"First Name\" value=\"\">
									</div>
									<div class=\"form-group\">
										<input type=\"text\" name=\"lname\" id=\"username\" tabindex=\"1\" class=\"form-control\" placeholder=\"Last Name\" value=\"\">
									</div>
									<div class=\"form-group\">
										<input type=\"email\" name=\"email\" id=\"username\" tabindex=\"1\" class=\"form-control\" placeholder=\"Email I'd\" value=\"\">
									</div>
									<div class=\"form-group\">
										<input type=\"text\" name=\"age\" id=\"username\" tabindex=\"1\" class=\"form-control\" placeholder=\"Age\" value=\"\">
									</div>
									<div class=\"form-group\">
										<input type=\"text\" name=\"gender\" id=\"email\" tabindex=\"1\" class=\"form-control\" placeholder=\"Gender\" value=\"\">
									</div>									
									<div class=\"form-group\">
										<input type=\"text\" name=\"street1\" id=\"username\" tabindex=\"1\" class=\"form-control\" placeholder=\"Street1\" value=\"\">
									</div>
									<div class=\"form-group\">
										<input type=\"text\" name=\"street2\" id=\"email\" tabindex=\"1\" class=\"form-control\" placeholder=\"Street2\" value=\"\">
									</div>
									
									<div class=\"form-group\">
										<input type=\"text\" name=\"city\" id=\"username\" tabindex=\"1\" class=\"form-control\" placeholder=\"City\" value=\"\">
									</div>
									<div class=\"form-group\">
										<input type=\"text\" name=\"state\" id=\"email\" tabindex=\"1\" class=\"form-control\" placeholder=\"State\" value=\"\">
									</div>
									<div class=\"form-group\">
										<input type=\"text\" name=\"zip\" id=\"username\" tabindex=\"1\" class=\"form-control\" placeholder=\"Zip\" value=\"\">
									</div>
									<div class=\"form-group\">
										<input type=\"text\" name=\"country\" id=\"email\" tabindex=\"1\" class=\"form-control\" placeholder=\"Country\" value=\"\">
									</div>
									<div class=\"form-group\">
										<input type=\"text\" name=\"phone\" id=\"username\" tabindex=\"1\" class=\"form-control\" placeholder=\"Phone\" value=\"\">
									</div>
									<div class=\"form-group\">
										<input type=\"text\" name=\"mem\" id=\"email\" tabindex=\"1\" class=\"form-control\" placeholder=\"Memberships\" value=\"\">
									</div>
									<div class=\"form-group\">
										<input type=\"password\" name=\"psw\" id=\"password\" tabindex=\"2\" class=\"form-control\" placeholder=\"Password\">
									</div>
									<div class=\"form-group\">
										<div class=\"row\">
											<div class=\"col-sm-6 col-sm-offset-3\">
												<input type=\"submit\" name=\"register-submit\" id=\"register-submit\" tabindex=\"4\" class=\"form-control btn btn-register\" value=\"Register Now\">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<script src=\"main.js\"> </script>
	</body>
	</html>";
?>