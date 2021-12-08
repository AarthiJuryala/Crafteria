<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "crafteria";

$conn = mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST["submit"]))
{
  if((!empty($_POST['name'])) && (!empty($_POST['email'])) && (!empty($_POST['comments'])) )
  {
     $name = $_POST['name'];
     $email = $_POST['email'];
     $comments = $_POST['comments'];
     $query = "INSERT INTO feedback(name,email,comments) VALUES('$name','$email','$comments')";
     echo "B";
       $run = mysqli_query($conn,$query) or die(mysqli_error($conn));
       echo "c";

       if($run){
        echo "Form submitted succesfully.";

       }
       else{

        echo "Form not submitted."; 
       }

    }
    else{
      echo "all fields required.";
    }

}