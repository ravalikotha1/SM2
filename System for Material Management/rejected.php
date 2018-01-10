<?php

// php select option value from database

$hostname = "projectdb.cq5wbnnwdbg1.us-east-1.rds.amazonaws.com";
$username = "groupusers";
$password = "groupusers_appuser";
$databaseName = "matmgmt";

// connect to mysql database

$connect = mysqli_connect("projectdb.cq5wbnnwdbg1.us-east-1.rds.amazonaws.com", "group6users", "group6users_appuser", "matmgmt");
// mysql select query
$query1 = "select t1.POID, t1.Createdate, t1.Createdby, t2.Fname, t2.Lname 
		   from matmgmt.Purchase t1 join matmgmt.Employee t2 
		   on t1.Createdby = t2.EmpID where t1.ApprovalStat = 'R' and t2.Manager = 'E_2021066815';";
// for method 1
$result1 = mysqli_query($connect, $query1);
session_start();

echo "<!DOCTYPE html>
<html lang=\"en\">
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
          <a class=\"dropdown-item\" href=\"#\">Rejected</a>
        </div>
      </li>
     </ul>
  </div>
</nav>

<div class=\"container\">
  <table class=\"table table-striped\">
    <thead>
      <tr>
        <th>PO Number</th>
        <th>Created On</th>
        <th>Created By</th>
		<th>EmpID</th>
      </tr>
    </thead>
    <tbody>";
	
foreach ($result1 as $row) {
	//while($row = mysql_fetch_array($result1)){
  $POID = $row['POID'];
  $date=$row['Createdate'];
  $by=$row['Createdby'];
  $Fname=$row['Fname'];
  $Lname=$row['Lname'];
  
 // $_SESSION['POID']=$POID;
	
     echo "<tr>";
     echo "<td><a href=\"http://localhost/adbmsscripts/approve.php?varname='".$POID."'\">".$POID."</td>";
	 echo "<td>".$date. "</td>";
	 echo "<td>".$Fname.$Lname."</td>";
	 echo "<td>".$by."</td>
        </tr>";
} echo "</tbody>
  </table>
</div>

</body>
</html>
";
 $connect->close();
?>