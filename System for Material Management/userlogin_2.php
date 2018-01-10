<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("projectdb.cq5wbnnwdbg1.us-east-1.rds.amazonaws.com", "group6users", "group6users_appuser", "matmgmt"); 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
else {
	session_start();
//echo "Connected";
echo "<br>";
$uname=$_POST['uname'];

$_SESSION['username']=$uname;

$psw1=$_POST['loginpsw'];

$sql3="SELECT LoginID,Password FROM matmgmt.Auth where LoginID='$uname';";
$sql4="select Designation from matmgmt.Employee where EmpID='$uname';";
$res = mysqli_query($link, "$sql3");
$res2 = mysqli_query($link, "$sql4");
$row5 = mysqli_fetch_array($res);
$row6 = mysqli_fetch_array($res2);
$check=explode("_",$uname);
if($check[0]=='e' || $check[0]=='E')
{
	if($res = mysqli_query($link, "$sql3"))
{
	if($row5['LoginID']==$uname && $row5['Password']==$psw1){
echo "Login allowed";
if($res2 = mysqli_query($link, "$sql4"))
{
	if($row6['Designation']=='Manager')
	{
		echo "<!DOCTYPE html>
<html>
<head>
<link rel=\"stylesheet\" href=\"external2.css\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand\" href=\"#\">Home</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Purchase Order
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
          <a class=\"dropdown-item\" href=\"http://localhost/adbmsscripts/dbconn_2.php\">Create</a>
          <a class=\"dropdown-item\" href=\"#\">Pending for approval</a>
          <a class=\"dropdown-item\" href=\"#\">Approved</a>
        </div>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Purchase Request
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
          <a class=\"dropdown-item\" href=\"Ravalicreate.html\">Create</a>
          <a class=\"dropdown-item\" href=\"#\">Modify</a>
          <a class=\"dropdown-item\" href=\"#\">Pending for approval</a>
          <a class=\"dropdown-item\" href=\"#\">Approved</a>
        </div>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Purchase Request
        </a>
    </ul>
  </div>
</nav>
 <div class=\"col-lg-6\" class=\"input-group\"
  	          style=\"border-top-width: 134px;
   		      margin-top: 77px;\">
   		      
<table>
    <tr id=\"duplicater\">
       <td>
          <input type=\"text\" list = \"material\" class=\"form-control\" >
          	<datalist id=\"material\" class = \"text-center\">
 		         <option value=\"Cotton      Kg\">
  	      	 <option value=\"Wool        Kg\">
  	      	 <option value=\"Polysterene Kg\">
  	      	 <option value=\"Silk        Kg\">
  	      	 <option value=\"Velvet      Kg\">
 		         <option value=\"Denim       Kg\">
		</datalist>
        </td>
		<td>
      	 <input type=\"text\" class=\"form-control\" >
		</td>
	 
	   <td >
	  	 <input type=\"button\" value=\"Delete\">
	   </td>
    </tr>
    <tr>
	    <td>
 			  <button id=\"button\" onclick=\"duplicate()\" > Add </button>
 			  <input type=\"submit\" value=\"Submit\">
 		  </td>
 		</tr>
 </table>
</div>
<script src = \"slideshow1.js\"></script>
</body>
</html>";
	
}
else{
	echo "Not Manager";
}

}

}
else{
echo "Login not allowed";
}
}
}
else{
	if($row5['LoginID']==$uname && $row5['Password']==$psw1){
echo "Login allowed";
echo "<!DOCTYPE html>
<html>
<head>
<link rel=\"stylesheet\" href=\"external2.css\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>

</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand\" href=\"#\">Home</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>
  <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
    <ul class=\"navbar-nav\">
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Purchase Order
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
          <a class=\"dropdown-item\" href=\"http://localhost/adbmsscripts/dbconn_2.php\">Create</a>
          <a class=\"dropdown-item\" href=\"#\">Pending for approval</a>
          <a class=\"dropdown-item\" href=\"#\">Approved</a>
        </div>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Purchase Request
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
          <a class=\"dropdown-item\" href=\"Ravalicreate.html\">Create</a>
          <a class=\"dropdown-item\" href=\"#\">Modify</a>
          <a class=\"dropdown-item\" href=\"#\">Pending for approval</a>
          <a class=\"dropdown-item\" href=\"#\">Approved</a>
        </div>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Purchase Request
        </a>
    </ul>
  </div>
</nav>
 <div class=\"col-lg-6\" class=\"input-group\"
  	          style=\"border-top-width: 134px;
   		      margin-top: 77px;\">
   		      
<table>
    <tr id=\"duplicater\">
       <td>
          <input type=\"text\" list = \"material\" class=\"form-control\" >
          	<datalist id=\"material\" class = \"text-center\">
 		         <option value=\"Cotton      Kg\">
  	      	 <option value=\"Wool        Kg\">
  	      	 <option value=\"Polysterene Kg\">
  	      	 <option value=\"Silk        Kg\">
  	      	 <option value=\"Velvet      Kg\">
 		         <option value=\"Denim       Kg\">
		</datalist>
        </td>
		<td>
      	 <input type=\"text\" class=\"form-control\" >
		</td>
	 
	   <td >
	  	 <input type=\"button\" value=\"Delete\">
	   </td>
    </tr>
    <tr>
	    <td>
 			  <button id=\"button\" onclick=\"duplicate()\" > Add </button>
 			  <input type=\"submit\" value=\"Submit\">
 		  </td>
 		</tr>
 </table>
</div>
<script src = \"slideshow1.js\"></script>
</body>
</html>";

	}
	
	
}
}
$link->close();
?>