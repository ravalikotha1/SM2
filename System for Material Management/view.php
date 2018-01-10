<?php

// php select option value from database

$hostname = "projectdb.cq5wbnnwdbg1.us-east-1.rds.amazonaws.com";
$username = "groupusers";
$password = "groupusers_appuser";
$databaseName = "matmgmt";
session_start();
// connect to mysql database
$connect = mysqli_connect("projectdb.cq5wbnnwdbg1.us-east-1.rds.amazonaws.com", "group6users", "group6users_appuser", "matmgmt");
//Get PO value
$PO_value = $_GET['varname'];
$username = $_SESSION['username'];
// mysql select query
$query = "Select t2.Description, t1.OrderQuantity from matmgmt.Purchasemat t1 
join matmgmt.Material t2 on t1.MatID = t2.MatID where t1.POID = $PO_value";
$query1="select Designation from matmgmt.Employee where empid = '$username'";
//$query1 = "select POID, Createdate, Createdby from matmgmt.Purchase where ApprovalStat = '' and Createdby in (select EmpID from matmgmt.Employee where Manager = 'E_2021066815');";

$result = mysqli_query($connect, $query);
$result1 = mysqli_query($connect, $query1);
$row1 = mysqli_fetch_row($result1);
echo"<!DOCTYPE html>
<html>
<head>
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
          <a class=\"dropdown-item\" href=\"http://localhost/adbmsscripts/create.php\">Create</a>
          <a class=\"dropdown-item\" href=\"http://localhost/adbmsscripts/pendingapproval.php\">Pending for approval</a>
          <a class=\"dropdown-item\" href=\"http://localhost/adbmsscripts/approved.php\">Approved</a>
          <a class=\"dropdown-item\" href=\"http://localhost/adbmsscripts/rejected.php\">Rejected</a>
        </div>
      </li>
     </ul>
  </div>
</nav>
 <div class=\"col-lg-6\" class=\"input-group\"
  	          style=\"border-top-width: 134px;
   		      margin-top: 77px;\">
   		      
<table class=\"table table-striped\">
<thead>
<tr>
<td>
Material
</td>
<td>
Quantity
</td>
</thead>
<tbody>";

foreach ($result as $row) {
	//while($row = mysql_fetch_array($result1)){

  $Material = $row['Description'];
  $Quantity=$row['OrderQuantity'];
echo"<tr>";
		echo"<td>".$Material."</td>";	 
	   echo"<td >".$Quantity."</td>
	   </tr>
</tbody>";
	}
	echo"
    </table> 
	
	
</div>  
</body>
</html>";
 $connect->close();
?>