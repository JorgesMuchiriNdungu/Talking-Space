<html>
<body>
    
 <link rel="stylesheet" href="css/patient.css">
     <a href="Doctor.html">Log Out</a>
    
             <style>
       
table.db-table		{ border-right:1px solid #ccc; border-bottom:1px solid #ccc;  background:#fffefe;}
table.db-table th	{ background:#eee; padding:5px; border-left:1px solid #ccc; border-top:1px solid #ccc; }
table.db-table td	{ padding:5px; border-left:1px solid #000000; border-top:1px solid #000000; }

      </style>
    
    
      
        
<?php

include('connection.php');
$spot_users = "SELECT full_name, email, phone_number,pick_file, username, password, Address,usertype FROM users ";
  $spot= " Delete *FROM users";
      

?>
            <br>
                <br>

              

    
            
               <body>
        <table width ="600"border="3"cellpading="3"cellspacing="3" id="db-table">
<tr>
    <th>Name</th>
     <th>Email</th>
     <th>Phone_number</th>
     <th>Image</th>
    <th>Username</th>
     <th>Password</th>
    <th>Address</th>
        <th>Usertype</th>
             <th>Edit</th>
     <th>Delete</th>
<script>
function myFunction() {
    document.getElementById("db-table").deleteRow($spot_users_row);
}
</script>





 <?php 

$result_spot_users = $conn->query($spot_users);
	if($result_spot_users->num_rows >0){
		while($spot_users_row = $result_spot_users->fetch_assoc()){
  
	?>
				<tr>
               
				<td><?php echo $spot_users_row["full_name"]; ?></td>
        <td><?php echo $spot_users_row["email"]; ?></td>
        <td><?php echo $spot_users_row["phone_number"]; ?></td>
        <td><?php echo $spot_users_row["pick_file"]; ?></td>
   <td><?php echo $spot_users_row["username"]; ?></td>

  <td><?php echo $spot_users_row["password"]; ?></td>
    <td><?php echo $spot_users_row["Address"]; ?></td>
      <td><?php echo $spot_users_row["usertype"]; ?></td>

 <td>  <a href="update.php?userid=<?php  echo $spot_users_row["userid"]; ?></td>
 ?>
 "><span class="edit" title="Edit"> E </span></a><td>
     

          <td> <a href="delete.php?userid=<?php echo $spot_users_row["userid"]; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">
        <span class="delete" title="Delete"> Deletess</span></a>


        <td>
                       <?php
  



}
        }
?>
            </tr>
                   </table>
    </body>
    </body>
</html>