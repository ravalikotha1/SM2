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