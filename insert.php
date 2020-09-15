<?php


mysqli_connect("localhost","id14872345_root","&-cTPkCZWG_\8pZ8") or die("not connected");
mysqli_select_db("id14872345_wt") or die("db not found");

// mysqli_connect("localhost","root","") or die("not connected");
// mysqli_select_db("wt") or die("db not found");



if(isset($_POST['submit'])){
    $fname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $apa = $_POST['apartment']; 
    
    $query ="insert into custumers(Cus_Name ,Email ,Phone ,Apartment) values('$fname','$email','$phone','$apa')";
if(mysqli_query($query)){
    echo "Data inserted successfully";
}
}


?>