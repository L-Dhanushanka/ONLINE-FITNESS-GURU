
<?php
   include_once'config.php';
?>


<?php

$sql = "UPDATE item SET Name='Edited Name' WHERE ID_no=2";

 if ($conn->query($sql) === TRUE) 
    {
       
       header("Location: index.php");
       echo "Record updated successfully";
    } 


  else 
    {
       echo "Error updating record: " . $conn->error;
    }

$conn->close();
?>