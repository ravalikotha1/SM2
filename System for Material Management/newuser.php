<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("projectdb.cq5wbnnwdbg1.us-east-1.rds.amazonaws.com", "group6users", "group6users_appuser", "matmgmt"); 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
else {
echo "Connected";
echo "<br>";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$age=$_POST['age'];
$street1=$_POST['street1'];
$street2=$_POST['street2'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$mem=$_POST['mem'];
$country=$_POST['country'];
$psw=$_POST['psw'];
$a="c_";
$b=$a.$phone;
$sql2="INSERT INTO matmgmt.Auth values ('$b','$psw');";

//Fetch Membership ID from Membership table
$sql1="select MemID from matmgmt.Membership where Type='$mem';";
if($result=mysqli_query($link,$sql1)){
 while ($row=mysqli_fetch_row($result)){
echo "<br>";
$n=$row[0];
$n=(int)$n;
echo "<br>";
// attempt insert query execution
$sql = "INSERT INTO matmgmt.Customer VALUES ('$b', '$fname', '$lname','$age','$gender','$street1','$street2','$city','$state','$country','$zip','$email','$phone','$n')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

}

}

// attempt insert query execution
$sql2 = "INSERT INTO matmgmt.Auth VALUES ('$b','$psw');";
if(mysqli_query($link, $sql2)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
$link->close();
?>