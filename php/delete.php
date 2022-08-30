
<?php
   include_once'config.php';
?>

<?php

$sql = "DELETE FROM Item WHERE ID_no=3";

  if ($conn->query($sql) === TRUE)  
    {
        
        header("Location: index.php");
        echo "Record deleted successfully";
    } 

  else 
    {
        echo "Error deleting record: " . $conn->error;
    }

$conn->close();
?>