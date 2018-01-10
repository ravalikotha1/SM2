<?php

// php select option value from database

$hostname = "projectdb.cq5wbnnwdbg1.us-east-1.rds.amazonaws.com";
$username = "groupusers";
$password = "groupusers_appuser";
$databaseName = "matmgmt";

// connect to mysql database

$connect = mysqli_connect("projectdb.cq5wbnnwdbg1.us-east-1.rds.amazonaws.com", "group6users", "group6users_appuser", "matmgmt");
// mysql select query
$query = "SELECT Description FROM matmgmt.Material;";

// for method 1

$result1 = mysqli_query($connect, $query);
$row=mysqli_fetch_row($result1);
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
          <a class=\"dropdown-item\" href=\"#\">Create</a>
          <a class=\"dropdown-item\" href=\"http://localhost/adbmsscripts/pendingapproval.php\">Pending for approval</a>
          <a class=\"dropdown-item\" href=\"http://localhost/adbmsscripts/approved.php\">Approved</a>		  
          <a class=\"dropdown-item\" href=\"http://localhost/adbmsscripts/rejected.php\">Rejected</a>
        </div>
      </li>
      
  </div>
</nav>
 <div class=\"col-lg-6\" class=\"input-group\"
  	          style=\"border-top-width: 134px;
   		      margin-top: 77px;\">
   		      
<table>
    <tr id=\"duplicater\">
       <td>";
	   echo "<select>";
		  while ($row = mysqli_fetch_array($result1)) { 
echo "<option>".$row[0];
$row[0];
echo "<br>";
}
echo "</option>";
        echo "</td>
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
</div>";
echo "<script>
function duplicate() {    
    var original = document.getElementById('duplicater');
    var rows = original.parentNode.rows;
    var i = rows.length - 1;
    var clone = original.cloneNode(true); // \"deep\" clone
    clone.id = \"duplic\" + (i); // there can only be one element with an ID
    original.parentNode.insertBefore(clone, rows[i]);
}

$('table').on('click', 'input[type=\"button\"]', function(e){
	   $(this).closest('tr').remove();
	});
</script>
</body>
</html>";
//$connect->close();
?>