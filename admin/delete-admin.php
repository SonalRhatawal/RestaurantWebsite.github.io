<?php

  include('../config/constants.php');

//1.Get the id of admin to be deleted

     $id = $_GET['id'];
//2. create sql query to delete admin

     $sql = "DELETE FROM tbl_admin WHERE id=$id";


     //Execute the query
     $res = mysqli_query($conn, $sql);

     //check whether the query is executed
     if($res==TRUE)
     {
         //echo "Admin Deleted";
         //create session
         $_SESSION['delete']= "<div class='success'>Admin Deleted Successfully.</div>";
         //Redirect to manage admin page
         header('location:'.SITEURL.'admin/manage-admin.php');
     }
     else
     {
         //echo "Failed to Delete";
         $_SESSION['delete'] = "<div class='error'>Failed to Delete Admin.Try Again Later...</div>";
         header('location:'.SITEURL.'admin/manage-admin.php');

     }

//3. redirect to manage admin page with msg (success/error)

?>