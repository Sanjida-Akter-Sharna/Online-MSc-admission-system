<?php
include_once 'dbconfig.php';
?>
   <?php

 $result_set=mysqli_query($connection, "SELECT * FROM tbl_uploads");
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        
      
   <a href="uploads/<?php echo $row['file'] ?>" target="_blank">Download file</a>
       
        <?php
 }
 ?>