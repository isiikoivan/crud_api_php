<?php
require ('../headers/header.php');
$id=$_GET['company_id'];
 $access->deleting($pdo,$id,'companies','../admin/dash_board.php');
  
?>