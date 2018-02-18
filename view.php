<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
<label>File Uploading With PHP and MySql</label>
</div>
<div id="body">
 <table width="80%" border="1">
    
    <tr>
    <td>File Name</td>
   
    <td>File Size(KB)</td>
    <td>DOWNLOAD</td>
    </tr>
    <?php

 $result_set=mysqli_query($connection, "SELECT * FROM tbl_uploads");
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['file'] ?></td>
       
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">Download file</a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    
</div>
</body>
</html>