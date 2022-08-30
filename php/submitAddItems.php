<?php
   include_once'config.php';
?>

<?php
  $id      = $_POST["field1"];
  $name    = $_POST["field2"];
  $age     = $_POST["field3"];
  $session = $_POST["field4"];
  $des     = $_POST["field5"];


  $sql = "insert into item(ID_no,Name,age,session,description)values('','$name','$age','$session','$des')";

  if(mysqli_query($conn,$sql))
 {
   echo "<script>alert ('Record Inserted Succesfully')</script>";
    header("Location: index.php");
 }

  else {
   echo "<script>alert ('Error In Inserting Records') </script>";
  }


   mysqli_close($conn);

?>