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
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$age=$_POST['age'];
$street1=$_POST['street1'];
$street2=$_POST['street2'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zipcode'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$mem=$_POST['mem'];
$a="c_";
$b=$a.$phone;

//Fetch Membership ID from Membership table
$sql1="select MemID from matmgmt.Membership where Type='$mem';";
if($result=mysqli_query($link,$sql1)){
 while ($row=mysqli_fetch_row($result)){
echo "<br>";
$n=$row[0];
$n=(int)$n;
echo "<br>";
// attempt insert query execution
$sql = "INSERT INTO matmgmt.dummyCustomer VALUES ('$b', '$fname', '$lname','$age','$gender','$street1','$street2','$city','$state','$zip','$email','$phone','$n')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

}

}

}
$link->close();
?>